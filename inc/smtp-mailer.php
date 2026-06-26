<?php

class EkmsSmtpMailer
{
    private $config;
    private $socket;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function send(array $message)
    {
        $this->connect();

        try {
            $fromEmail = $this->config['from']['email'];
            $toEmail = $message['to_email'];

            $this->command('MAIL FROM:<' . $fromEmail . '>', [250]);
            $this->command('RCPT TO:<' . $toEmail . '>', [250, 251]);
            $this->command('DATA', [354]);

            $payload = $this->buildMessage($message);
            fwrite($this->socket, $this->dotStuff($payload) . "\r\n.\r\n");
            $this->expect($this->readResponse(), [250]);
            $this->command('QUIT', [221]);
        } finally {
            $this->disconnect();
        }
    }

    private function connect()
    {
        $smtp = $this->config['smtp'];
        $host = $smtp['host'];
        $port = (int) $smtp['port'];
        $encryption = strtolower($smtp['encryption'] ?? 'tls');
        $timeout = (int) ($smtp['timeout'] ?? 20);
        $remote = ($encryption === 'ssl' ? 'ssl://' : '') . $host;

        $this->socket = @fsockopen($remote, $port, $errno, $errstr, $timeout);

        if (!$this->socket) {
            throw new RuntimeException('Could not connect to SMTP server: ' . $errstr);
        }

        stream_set_timeout($this->socket, $timeout);
        $this->expect($this->readResponse(), [220]);

        $serverName = $_SERVER['SERVER_NAME'] ?? 'localhost';
        $this->command('EHLO ' . $serverName, [250]);

        if ($encryption === 'tls') {
            $this->command('STARTTLS', [220]);
            $enabled = stream_socket_enable_crypto($this->socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);

            if ($enabled !== true) {
                throw new RuntimeException('Could not start TLS for SMTP connection.');
            }

            $this->command('EHLO ' . $serverName, [250]);
        }

        if (!empty($smtp['username']) && !empty($smtp['password'])) {
            $this->command('AUTH LOGIN', [334]);
            $this->command(base64_encode($smtp['username']), [334]);
            $this->command(base64_encode($smtp['password']), [235]);
        }
    }

    private function disconnect()
    {
        if (is_resource($this->socket)) {
            fclose($this->socket);
        }

        $this->socket = null;
    }

    private function command($command, array $expectedCodes)
    {
        fwrite($this->socket, $command . "\r\n");
        $this->expect($this->readResponse(), $expectedCodes);
    }

    private function readResponse()
    {
        $response = '';

        while (($line = fgets($this->socket, 515)) !== false) {
            $response .= $line;

            if (preg_match('/^\d{3} /', $line)) {
                break;
            }
        }

        if ($response === '') {
            throw new RuntimeException('SMTP server returned an empty response.');
        }

        return [
            'code' => (int) substr($response, 0, 3),
            'text' => trim($response),
        ];
    }

    private function expect(array $response, array $expectedCodes)
    {
        if (!in_array($response['code'], $expectedCodes, true)) {
            throw new RuntimeException('Unexpected SMTP response: ' . $response['text']);
        }
    }

    private function buildMessage(array $message)
    {
        $fromEmail = $this->config['from']['email'];
        $fromName = $this->config['from']['name'];
        $toEmail = $message['to_email'];
        $toName = $message['to_name'] ?? '';
        $subject = $message['subject'];
        $plain = $message['plain'] ?? strip_tags($message['html']);
        $html = $message['html'];
        $boundary = 'ekms_' . bin2hex(random_bytes(12));
        $domain = substr(strrchr($fromEmail, '@'), 1) ?: 'eminentkidsschool.com';

        $headers = [
            'Date: ' . date('r'),
            'From: ' . $this->formatAddress($fromEmail, $fromName),
            'To: ' . $this->formatAddress($toEmail, $toName),
            'Subject: ' . $this->encodeHeader($subject),
            'Message-ID: <' . bin2hex(random_bytes(16)) . '@' . $domain . '>',
            'MIME-Version: 1.0',
            'Content-Type: multipart/alternative; boundary="' . $boundary . '"',
        ];

        if (!empty($message['reply_to_email'])) {
            $headers[] = 'Reply-To: ' . $this->formatAddress($message['reply_to_email'], $message['reply_to_name'] ?? '');
        }

        return implode("\r\n", $headers)
            . "\r\n\r\n--" . $boundary
            . "\r\nContent-Type: text/plain; charset=UTF-8"
            . "\r\nContent-Transfer-Encoding: 8bit\r\n\r\n"
            . $plain
            . "\r\n\r\n--" . $boundary
            . "\r\nContent-Type: text/html; charset=UTF-8"
            . "\r\nContent-Transfer-Encoding: 8bit\r\n\r\n"
            . $html
            . "\r\n\r\n--" . $boundary . "--";
    }

    private function dotStuff($payload)
    {
        $payload = str_replace(["\r\n", "\r"], "\n", $payload);
        $payload = preg_replace('/^\./m', '..', $payload);

        return str_replace("\n", "\r\n", $payload);
    }

    private function formatAddress($email, $name = '')
    {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$email) {
            throw new RuntimeException('Invalid email address supplied.');
        }

        $name = $this->headerSafe($name);

        if ($name === '') {
            return '<' . $email . '>';
        }

        return '"' . addcslashes($name, '"\\') . '" <' . $email . '>';
    }

    private function encodeHeader($value)
    {
        $value = $this->headerSafe($value);

        if (function_exists('mb_encode_mimeheader')) {
            return mb_encode_mimeheader($value, 'UTF-8', 'B', "\r\n");
        }

        return $value;
    }

    private function headerSafe($value)
    {
        return trim(preg_replace('/[\r\n]+/', ' ', (string) $value));
    }
}
