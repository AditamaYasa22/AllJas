<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Pastikan Anda telah menginstal PHPMailer melalui Composer
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Konfigurasi SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';        // Server SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your-email@example.com';  // Email SMTP Anda
    $mail->Password   = 'your-email-password';     // Password SMTP
    $mail->SMTPSecure = 'tls';                     // Enkripsi TLS atau SSL
    $mail->Port       = 587;                       // Port SMTP (587 untuk TLS, 465 untuk SSL)

    // Pengaturan email
    $mail->setFrom('tamayasa@gmail.com', 'Admin All Jas');  // Email pengirim
    $mail->addAddress('recipient-email@example.com', 'Recipient Name'); // Email penerima

    $mail->isHTML(true);
    $mail->Subject = 'Verifikasi Email';
    $mail->Body = '<p>Klik tautan berikut untuk verifikasi akun Anda:</p>
               <a href="https://your-domain.com/auth/verify/'.$hash.'">
               Verifikasi Akun</a>';

    $mail->AltBody = 'Berhasil Mengirim Email! Ini adalah email pengujian SMTP.';

    $mail->send();
    echo 'Pesan telah terkirim';
} catch (Exception $e) {
    echo "Pesan tidak terkirim. Error: {$mail->ErrorInfo}";
}
