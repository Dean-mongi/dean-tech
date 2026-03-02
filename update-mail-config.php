<?php
$envFile = __DIR__ . '/.env';
$envContent = file_get_contents($envFile);

$updates = [
    'MAIL_MAILER=smtp',
    'MAIL_HOST=smtp.gmail.com',
    'MAIL_PORT=587',
    'MAIL_USERNAME=deanmongi90@gmail.com',
    'MAIL_PASSWORD=chmieplrkijgdcea',
    'MAIL_ENCRYPTION=tls',
    'MAIL_FROM_ADDRESS=deanmongi90@gmail.com',
    'MAIL_FROM_NAME=Dean Tech'
];

foreach ($updates as $update) {
    list($key, $value) = explode('=', $update);
    if (preg_match("/^{$key}=.*/m", $envContent)) {
        $envContent = preg_replace("/^{$key}=.*/m", $update, $envContent);
    } else {
        $envContent .= "\n" . $update;
    }
}

file_put_contents($envFile, $envContent);
echo "Mail configuration updated successfully!\n";
