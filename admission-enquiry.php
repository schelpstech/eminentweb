<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require __DIR__ . '/inc/smtp-mailer.php';
require __DIR__ . '/inc/form-token.php';

$config = require __DIR__ . '/inc/mail-config.php';

function ekms_post_value($key, $maxLength = 500)
{
    $value = $_POST[$key] ?? '';

    if (is_array($value)) {
        return '';
    }

    $value = trim((string) $value);
    $value = preg_replace('/[^\P{C}\r\n\t]/u', '', $value);

    if ($value === null) {
        $value = trim((string) ($_POST[$key] ?? ''));
    }

    if (function_exists('mb_substr')) {
        return mb_substr($value, 0, $maxLength, 'UTF-8');
    }

    return substr($value, 0, $maxLength);
}

function ekms_e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function ekms_flash_redirect($type, $message, array $old = [], $status = 'send-error')
{
    $_SESSION['admission_flash'] = [
        'type' => $type,
        'message' => $message,
    ];

    if ($old) {
        $_SESSION['admission_old'] = $old;
    }

    session_write_close();
    header('Location: admissions.php?admission_status=' . rawurlencode($status) . '#enquiry-form', true, 303);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ekms_flash_redirect('error', 'Please use the admission enquiry form to send your request.', [], 'use-form');
}

if (ekms_post_value('website', 120) !== '') {
    ekms_flash_redirect('success', 'Thank you. Your admission enquiry has been received.', [], 'received');
}

$postedToken = ekms_post_value('csrf_token', 128);

if (!ekms_form_token_verify($postedToken, 'admission')) {
    ekms_flash_redirect('error', 'Your form session has expired. Please try again.', [], 'expired');
}

$programmeLabels = [
    'pre-school' => 'Pre-School',
    'nursery' => 'Nursery School',
    'primary' => 'Primary School',
    'hostel' => 'Hostel Enquiry',
    'school-visit' => 'School Visit',
];

$parentName = ekms_post_value('parent_name', 120);
$email = ekms_post_value('email', 160);
$phone = ekms_post_value('phone', 80);
$childName = ekms_post_value('child_name', 120);
$childAge = ekms_post_value('child_age', 80);
$programme = ekms_post_value('programme', 40);
$preferredStart = ekms_post_value('preferred_start', 120);
$message = ekms_post_value('message', 1500);

$old = [
    'parent_name' => $parentName,
    'email' => $email,
    'phone' => $phone,
    'child_name' => $childName,
    'child_age' => $childAge,
    'programme' => $programme,
    'preferred_start' => $preferredStart,
    'message' => $message,
];

if ($parentName === '' || $email === '' || $phone === '' || $childName === '' || $programme === '' || $message === '') {
    ekms_flash_redirect('error', 'Please complete all required fields before sending your admission enquiry.', $old, 'missing');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    ekms_flash_redirect('error', 'Please enter a valid email address so we can send your confirmation.', $old, 'invalid-email');
}

if (!array_key_exists($programme, $programmeLabels)) {
    ekms_flash_redirect('error', 'Please select a valid enrollment class or enquiry type.', $old, 'invalid-programme');
}

if (($config['smtp']['password'] ?? '') === 'CHANGE_THIS_PASSWORD') {
    ekms_flash_redirect('error', 'The admission enquiry mailbox is not configured yet. Please call the school directly for now.', $old, 'not-configured');
}

$programmeLabel = $programmeLabels[$programme];
$school = $config['school'];
$submittedAt = date('l, F j, Y g:i A');

$summaryRows = [
    'Parent/Guardian Name' => $parentName,
    'Email Address' => $email,
    'Phone Number' => $phone,
    'Child Name' => $childName,
    'Child Age / Current Class' => $childAge ?: 'Not provided',
    'Enrollment Interest' => $programmeLabel,
    'Preferred Term / Start Date' => $preferredStart ?: 'Not provided',
    'Submitted' => $submittedAt,
];

$adminTable = '';
$plainLines = [];

foreach ($summaryRows as $label => $value) {
    $adminTable .= '<tr><th style="text-align:left;padding:10px 12px;background:#f4f8f5;border:1px solid #dde7df;">' . ekms_e($label) . '</th><td style="padding:10px 12px;border:1px solid #dde7df;">' . ekms_e($value) . '</td></tr>';
    $plainLines[] = $label . ': ' . $value;
}

$adminHtml = '<div style="font-family:Arial,sans-serif;color:#20242a;line-height:1.6;">'
    . '<h2 style="color:#0b7a3b;margin:0 0 12px;">New Admission Enquiry</h2>'
    . '<p>A parent has submitted an admission enquiry from the Eminent Kids Montessori School website.</p>'
    . '<table style="width:100%;border-collapse:collapse;margin:18px 0;">' . $adminTable . '</table>'
    . '<h3 style="color:#0b7a3b;margin-bottom:8px;">Message</h3>'
    . '<p style="white-space:pre-line;">' . nl2br(ekms_e($message)) . '</p>'
    . '</div>';

$adminPlain = "New Admission Enquiry\n\n"
    . implode("\n", $plainLines)
    . "\n\nMessage:\n" . $message;

$parentHtml = '<div style="font-family:Arial,sans-serif;color:#20242a;line-height:1.6;">'
    . '<h2 style="color:#0b7a3b;margin:0 0 12px;">Thank you for contacting ' . ekms_e($school['name']) . '</h2>'
    . '<p>Dear ' . ekms_e($parentName) . ',</p>'
    . '<p>We have received your admission enquiry for ' . ekms_e($childName) . ' under <strong>' . ekms_e($programmeLabel) . '</strong>. Our admissions team will review your request and contact you with the next steps.</p>'
    . '<p>' . ekms_e($school['name']) . ' provides nursery and primary education in a warm, structured environment that supports academics, morals, creativity, confidence and leadership.</p>'
    . '<h3 style="color:#0b7a3b;margin-bottom:8px;">Your enquiry summary</h3>'
    . '<table style="width:100%;border-collapse:collapse;margin:18px 0;">' . $adminTable . '</table>'
    . '<h3 style="color:#0b7a3b;margin-bottom:8px;">School contact information</h3>'
    . '<p><strong>Admissions:</strong> ' . ekms_e($config['admissions_email']) . '<br>'
    . '<strong>Email:</strong> ' . ekms_e($school['email']) . '<br>'
    . '<strong>Phone:</strong> ' . ekms_e($school['phone_1']) . ', ' . ekms_e($school['phone_2']) . '<br>'
    . '<strong>Address:</strong> ' . ekms_e($school['address']) . '<br>'
    . '<strong>Website:</strong> <a href="' . ekms_e($school['website']) . '">' . ekms_e($school['website']) . '</a></p>'
    . '<p>Warm regards,<br>' . ekms_e($school['name']) . ' Admissions Team</p>'
    . '</div>';

$parentPlain = "Dear {$parentName},\n\n"
    . "We have received your admission enquiry for {$childName} under {$programmeLabel}. Our admissions team will contact you with the next steps.\n\n"
    . "About the school: {$school['name']} provides nursery and primary education in a warm, structured environment that supports academics, morals, creativity, confidence and leadership.\n\n"
    . "Your enquiry summary:\n" . implode("\n", $plainLines)
    . "\n\nSchool contact information:\n"
    . "Admissions: {$config['admissions_email']}\n"
    . "Email: {$school['email']}\n"
    . "Phone: {$school['phone_1']}, {$school['phone_2']}\n"
    . "Address: {$school['address']}\n"
    . "Website: {$school['website']}\n";

$mailer = new EkmsSmtpMailer($config);
$adminSent = false;

try {
    $mailer->send([
        'to_email' => $config['admissions_email'],
        'to_name' => $school['name'] . ' Admissions',
        'subject' => 'New admission enquiry from ' . $parentName,
        'html' => $adminHtml,
        'plain' => $adminPlain,
        'reply_to_email' => $email,
        'reply_to_name' => $parentName,
    ]);

    $adminSent = true;

    $mailer->send([
        'to_email' => $email,
        'to_name' => $parentName,
        'subject' => 'We received your admission enquiry',
        'html' => $parentHtml,
        'plain' => $parentPlain,
        'reply_to_email' => $config['admissions_email'],
        'reply_to_name' => $school['name'] . ' Admissions',
    ]);

    unset($_SESSION['admission_old']);
    ekms_flash_redirect('success', 'Thank you. Your admission enquiry has been sent, and a confirmation email has been sent to you.', [], 'sent');
} catch (Throwable $exception) {
    error_log('EKMS admission enquiry mail failed: ' . $exception->getMessage());

    if ($adminSent) {
        unset($_SESSION['admission_old']);
        ekms_flash_redirect('success', 'Your enquiry was sent to Admissions, but the confirmation email could not be delivered. The school will still contact you.', [], 'partial');
    }

    ekms_flash_redirect('error', 'We could not send your enquiry at the moment. Please call the school directly or try again later.', $old, 'send-error');
}
