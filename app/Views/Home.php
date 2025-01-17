<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALLJAS - Solusi Semua Jasa</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
  <!-- Header -->
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

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>All Jas ada untuk semua jasa, terpercaya, dan banyak solusi untuk anda</h1>
      <div class="cta-button">
        <a href="tel:+6285722185904">
        <img src="<?= base_url('assets/images/wa.jpg'); ?>" alt="085722185904">
        <span>Butuh jasa apa hari ini ?</span></a>
      </div>
    </div>
    <div class="hero-illustration">
      <img src="<?= base_url('assets/images/image1.jpg'); ?>" alt="Ilustrasi">
    </div>
  </section>

  <!-- Services Section -->
  <section class="services">
    <h2>Pilih Jasa Yang Kamu Inginkan</h2>
    <div class="service-list">
      <?php foreach ($services as $service): ?>
        <div class="service-item">
          <img src="<?= esc($service['image_url']); ?>" alt="<?= esc($service['name']); ?>">
          <h3><?= $service['name']; ?></h3>
          <h6><?= $service['desc']; ?></h6>
          <a href="<?= base_url('Home/PilihJasa?name=' . urlencode($service['name']) . '&desc=' . urlencode($service['desc']) . '&price=' . urlencode($service['price']) . '&image=' . urlencode(basename($service['image_url']))); ?>">
            <button>Pilih Jasa</button>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

   <!-- Footer -->
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


