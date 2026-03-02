@echo off
echo ========================================
echo Dean Tech - Gmail SMTP Configuration
echo ========================================
echo.
echo IMPORTANT: You need a Gmail App Password
echo To get one:
echo 1. Go to https://myaccount.google.com/security
echo 2. Enable 2-Step Verification
echo 3. Go to App Passwords (search in settings)
echo 4. Create new app password for "Mail"
echo.
echo ========================================
echo.

set /p EMAIL="Enter your Gmail address (deanmongi90@gmail.com): "
set /p PASSWORD="Enter your Gmail App Password: "

echo.
echo Updating .env file...

powershell -Command "(Get-Content .env) -replace 'MAIL_MAILER=log', 'MAIL_MAILER=smtp' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_HOST=127.0.0.1', 'MAIL_HOST=smtp.gmail.com' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_PORT=2525', 'MAIL_PORT=587' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_USERNAME=.*', 'MAIL_USERNAME=%EMAIL%' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_PASSWORD=.*', 'MAIL_PASSWORD=%PASSWORD%' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_FROM_ADDRESS=hello@example.com', 'MAIL_FROM_ADDRESS=%EMAIL%' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace 'MAIL_FROM_NAME=.*', 'MAIL_FROM_NAME=Dean Tech' | Set-Content .env"

echo.
echo Adding SMTP encryption settings...
echo MAIL_ENCRYPTION=tls >> .env

echo.
echo ========================================
echo Configuration complete!
echo ========================================
echo.
echo Clearing Laravel config cache...
php artisan config:clear
echo.
echo Done! Test your contact form now.
echo.
pause
