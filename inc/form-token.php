<?php

function ekms_form_token_secret()
{
    return 'ekms-admission-form-v1|' . __DIR__;
}

function ekms_form_token_create($scope)
{
    $issuedAt = time();
    $payload = $scope . '|' . $issuedAt;
    $signature = hash_hmac('sha256', $payload, ekms_form_token_secret());

    return rtrim(strtr(base64_encode($payload . '|' . $signature), '+/', '-_'), '=');
}

function ekms_form_token_verify($token, $scope, $maxAge = 7200)
{
    $normalized = strtr((string) $token, '-_', '+/');
    $normalized .= str_repeat('=', (4 - strlen($normalized) % 4) % 4);
    $decoded = base64_decode($normalized, true);

    if (!$decoded) {
        return false;
    }

    $parts = explode('|', $decoded);

    if (count($parts) !== 3) {
        return false;
    }

    [$tokenScope, $issuedAt, $signature] = $parts;

    if ($tokenScope !== $scope || !ctype_digit($issuedAt)) {
        return false;
    }

    if ((time() - (int) $issuedAt) > $maxAge) {
        return false;
    }

    $payload = $tokenScope . '|' . $issuedAt;
    $expected = hash_hmac('sha256', $payload, ekms_form_token_secret());

    return hash_equals($expected, $signature);
}
