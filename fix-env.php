<?php
$envFile = __DIR__ . '/.env';
$envContent = file_get_contents($envFile);

// Fix MAIL_FROM_NAME - wrap in quotes if it has spaces
$envContent = preg_replace('/^MAIL_FROM_NAME=.*/m', 'MAIL_FROM_NAME="Dean Tech"', $envContent);

file_put_contents($envFile, $envContent);
echo "Fixed MAIL_FROM_NAME in .env file!\n";
