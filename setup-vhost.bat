@echo off
:: Run this file as Administrator to add dean-tech.test to your hosts file
echo Adding dean-tech.test to hosts file...
echo 127.0.0.1 dean-tech.test >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1 www.dean-tech.test >> C:\Windows\System32\drivers\etc\hosts
echo Done! Please restart Apache from XAMPP Control Panel.
pause
