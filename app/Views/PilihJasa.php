<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih Jasa Suruh</title>
  <link rel="stylesheet" href="<?= base_url('css/StylePilihJasa.css'); ?>">
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
    <div class="header">
      <a href="/Layanan"><span class="back-button">←</span></a>
      <h1>Pilih Jasa Suruh</h1>
    </div>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('PilihJasa/submit'); ?>" method="post">
      <?= csrf_field(); ?>
      <div class="content">
        <div class="left">
          <div class="section">
            <h2>Jam Operasional 10:00 - 19:00</h2>
            <div class="input-group">
              <label for="date">Pilih Tanggal</label>
              <input type="date" id="date" name="date" value="<?= date('Y-m-d'); ?>" required>
            </div>
            <div class="input-group">
              <label for="time">Pilih Jam</label>
              <input type="time" id="time" name="time" value="<?= date('H:i'); ?>" required>
            </div>
            <div class="input-group">
              <label>Pilih Gender Jasa</label>
              <div class="gender-options">
                <input type="radio" name="gender" value="Pria" id="pria" checked>
                <label for="pria">Pria</label>
                <input type="radio" name="gender" value="Wanita" id="wanita">
                <label for="wanita">Wanita</label>
                <input type="radio" name="gender" value="Bebas" id="bebas">
                <label for="bebas">Bebas</label>
              </div>
            </div>
            <div class="input-group">
              <label for="offer">Ajukan Harga Penawaran</label>
              <textarea id="offer" name="offer" placeholder="Tulis penawaran Anda di sini..." required></textarea>
            </div>
          </div>
        </div>

        <div class="right">
          <div class="section">
            <h2>Harga Penawaran</h2>
            <p class="price" id="price">Rp. <?= number_format($price, 0, ',', '.'); ?></p>
            <input type="hidden" name="service_name" value="<?= $name; ?>">
            <input type="hidden" name="service_price" value="<?= $price; ?>">
            <button type="submit" class="submit-button">Submit</button>
          </div>

          <div class="card">
            <img id="service-img" src="<?= esc($image ?? base_url('assets/images/default.jpg')); ?>" alt="Service Image">
            <h3 id="service-name"><?= esc($name ?? 'Tidak ada data'); ?></h3>
            <p id="service-desc"><?= esc($desc ?? 'Tidak ada Deskripsi'); ?></p>
          </div>
        </div>
      </div>
    </form>
  </div>

  <footer id="footer">
    <div class="footer-content">
        <!-- Logo dan kontak -->
        <div class="footer-logo">
            <img src="<?= base_url('assets/images/All Jas.png'); ?>" alt="Logo">
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
                <a href="#"><img src="<?= base_url('assets/images/wa.jpg'); ?>" alt="WhatsApp"></a>
                <a href="#"><img src="<?= base_url('assets/images/instagram.jpg'); ?>" alt="Instagram"></a>
                <a href="#"><img src="<?= base_url('assets/images/facebook.jpg'); ?>" alt="Facebook"></a>
                <a href="#"><img src="<?= base_url('assets/images/twitter.jpg'); ?>" alt="Twitter"></a>
            </div>
        </div>
    </div>
</footer>

</body>
<script>
  document.getElementById('time').addEventListener('change', function() {
    const selectedTime = this.value;
    const startTime = '10:00';
    const endTime = '19:00';

    if (selectedTime < startTime || selectedTime > endTime) {
      alert('Jam yang Anda pilih berada di luar jam operasional!');
      this.value = startTime;
    }
  });
</script>
</html>
