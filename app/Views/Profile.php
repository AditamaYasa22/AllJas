<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Pesanan</title>
  <link rel="stylesheet" href="<?= base_url('css/StyleProfile.css'); ?>">
</head>
<body>
<header>
    <div class="logo">
      <img src="<?= base_url('assets/images/All Jas.png'); ?>">
    </div>
    <nav>
      <a href="/">Beranda</a>
      <a href="/Layanan">Layanan</a>
      <a href="#footer">Tentang Kami</a>
    </nav>
    <div class="login-button">
    <!-- Tombol Login -->
    <?php if (session()->has('logged_in') && session()->get('logged_in')): ?>
        <a href="<?= base_url('logout'); ?>" class="btn-logout">Logout</a>
    <?php else: ?>
        <!-- Tombol Login -->
        <a href="<?= base_url('login'); ?>" class="btn-login">Login</a>
    <?php endif; ?>
  </div>
  </header>

  <div class="container">
    <div class="profile">
      <p><strong>Username</strong></p>
      <p><?= esc($username); ?></p>
      <p><strong>Nama Lengkap</strong></p>
      <p><?= esc($fullname); ?></p>
      <p><strong>Email</strong></p>
      <p><?= esc($email); ?></p>
      <p><strong>No. Whatsapp</strong></p>
      <p><?= esc($whatsapp); ?></p>
      <p><strong>Alamat</strong></p>
      <p><?= esc($address); ?></p>
      <a href="<?= base_url('EditProfile'); ?>" class="edit-button">Edit Profile</a>
    </div>
    <div class="orders">
      <a href="<?= base_url('Layanan'); ?>" class="back-button">← Kembali</a>
      <h2>Riwayat Pesanan</h2>
      <?php if (!empty($orders)): ?>
        <?php foreach ($orders as $order): ?>
          <div class="order-card">
            <p><strong>Nama Jasa:</strong> <?= esc($order['service_name']); ?></p>
            <p><strong>Tanggal:</strong> <?= esc($order['date']); ?></p>
            <p><strong>Waktu:</strong> <?= esc($order['time']); ?></p>
            <p><strong>Harga:</strong> Rp <?= number_format($order['service_price'], 0, ',', '.'); ?></p>
            <hr>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Belum ada riwayat pesanan.</p>
      <?php endif; ?>
    </div>
  </div>
  <footer id="footer">
    <div class="footer-content">
      <!-- Logo dan kontak -->
      <div class="footer-logo">
        <img src="<?= base_url('assets/images/All Jas.png');?>" alt="Logo">
        <p>Tlp: 012-345-67890</p>
        <p>Email: alljas@gmail.com</p>
        <p>Alamat: Jl. Pegadilan No 12, Sukabumi, Jawa Barat</p>
      </div>
  
      <!-- Tentang Kami -->
      <div class="footer-info">
        <h3>Tentang Kami</h3>
        <p>012-345-67890</p>
        <p>alljas@gmail.com</p>
        <p> Jl. Pegadilan No 12, Sukabumi, Jawa Barat</p>
      </div>
  
      <!-- Social Media -->
      <div class="social-media">
        <h3>Temukan Social Media Kami</h3>
        <div class="social-icons">
          <a href="tel:+6285722185904"><img src="<?= base_url('assets/images/wa.jpg');?>" alt="WhatsApp"></a>
          <a href="#"><img src="<?= base_url('assets/images/instagram.jpg');?>" alt="Instagram"></a>
          <a href="#"><img src="<?= base_url('assets/images/facebook.jpg');?>" alt="Facebook"></a>
          <a href="#"><img src="<?= base_url('assets/images/twitter.jpg');?>" alt="Twitter"></a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
