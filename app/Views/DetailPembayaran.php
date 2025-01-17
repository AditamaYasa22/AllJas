<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pembayaran</title>
  <!-- Tautkan file CSS eksternal -->
  <link rel="stylesheet" href="<?= base_url('css/StylePembayaran.css'); ?>">
</head>
<body>
<header>
    <div class="logo">
      <img src="<?= base_url('assets/images/All Jas.png'); ?>">
    </div>
    <nav>
      <a href="">Beranda</a>
      <a href="/Layanan">Layanan</a>
      <a href="#footer">Tentang Kami</a>
    </nav>
    <div class="login-button">
    <!-- Tombol Login -->
    <?php if (session()->has('logged_in') && session()->get('logged_in')): ?>
        <!-- Tombol Profile -->
        <a href="<?= base_url('Profile'); ?>" class="btn-profile">Profile</a>
        <!-- Tombol Logout -->
        <a href="<?= base_url('logout'); ?>" class="btn-logout">Logout</a>
    <?php else: ?>
        <!-- Tombol Login -->
        <a href="<?= base_url('login'); ?>" class="btn-login">Login</a>
    <?php endif; ?>
  </div>
  </header>
  <div class="container">
    <!-- Left Section -->
    <div class="left-section">
      <div class="header">
        <h2>Detail Pembayaran</h2>
        <a href="<?= base_url('/Layanan'); ?>">
          <button class="cancel-button">Batalkan Pembayaran</button>
        </a>
      </div>

      <div class="card">
        <h3>Metode Pembayaran</h3>
        <div class="radio-group">
          <div class="radio-item">
            <input type="radio" id="cash" name="payment-method" checked>
            <label for="cash">Cash</label>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Detail Pesanan</h3>
        <div class="detail-row">
          <strong>Nama Jasa:</strong> <?= esc($service_name); ?>
        </div>
        <div class="detail-row">
          <strong>Nama Pelanggan:</strong> <?= esc($customer_name); ?>
        </div>
        <div class="detail-row">
          <strong>Tanggal Pesanan:</strong> <?= esc($order_date); ?>
        </div>
        <div class="detail-row">
          <strong>Waktu Pesanan:</strong> Jam <?= esc($order_time); ?>
        </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <div class="total-payment">
      <h3>Total Pembayaran</h3>
        <h2>RP. <?= number_format($total_price, 0, ',', '.'); ?></h2>
      </div>
      <a href="<?= base_url('/Berhasil'); ?>">
        <button class="pay-button">Bayar RP. <?= number_format($total_price, 0, ',', '.'); ?></button>
      </a>
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