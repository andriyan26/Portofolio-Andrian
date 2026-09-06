@echo off
:: Script otomatis untuk mendaftarkan nama domain: http://portofolio-andrian di Windows
echo ===================================================
echo Menyiapkan domain lokal: http://portofolio-andrian
echo ===================================================

:: Meminta hak akses Administrator jika belum aktif
net session >nul 2>&1
if %errorLevel% neq 0 (
    echo Meminta izin Administrator...
    powershell -Command "Start-Process '%~f0' -Verb RunAs"
    exit /b
)

:: Menambahkan entri ke C:\Windows\System32\drivers\etc\hosts
findstr /i "portofolio-andrian" "%SystemRoot%\System32\drivers\etc\hosts" >nul
if %errorLevel% neq 0 (
    echo. >> "%SystemRoot%\System32\drivers\etc\hosts"
    echo 127.0.0.1      portofolio-andrian      #portfolio >> "%SystemRoot%\System32\drivers\etc\hosts"
    echo [SUKSES] Domain portofolio-andrian berhasil didaftarkan ke Windows hosts!
) else (
    echo [INFO] Domain portofolio-andrian sudah aktif terdaftar di Windows hosts!
)

echo.
echo ===================================================
echo Berhasil! Sekarang Anda dapat langsung membuka:
echo http://portofolio-andrian
echo di Google Chrome atau browser lainnya.
echo ===================================================
pause
