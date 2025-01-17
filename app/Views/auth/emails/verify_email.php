<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= lang('Auth.activationSubject') ?></title>
</head>
<body>
    <h1>Aktivasi Akun Anda</h1>
    <p>Halo,</p>
    <p>Terima kasih telah mendaftar di platform kami. Klik tombol di bawah ini untuk memverifikasi email Anda dan mengaktifkan akun Anda.</p>
    <p><a href="<?= site_url('auth/verify/' . $hash) ?>" target="_blank">Klik di sini untuk verifikasi akun Anda</a></p>
    <p>Jika Anda tidak merasa mendaftar, abaikan email ini.</p>
</body>
</html>
