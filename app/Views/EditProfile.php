<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="<?= base_url('css/StyleEditprofile.css'); ?>">
</head>
<body>
  <div class="container">
  <div class="header">
  <a href="<?= base_url('Profile'); ?>" class="back-link">← Kembali ke Profil</a>
  </div>
    <h2>Edit Profile</h2>
    <form action="<?= base_url('Profile/update'); ?>" method="post" id="edit-profile-form">
      <?= csrf_field() ?>
      <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?= esc($user['username']); ?>" required>
      </div>
      <div>
        <label for="full-name">Nama Lengkap</label>
        <input type="text" id="full-name" name="fullname" value="<?= esc($user['fullname']); ?>" required>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= esc($user['email']); ?>" required>
      </div>
      <div>
        <label for="phone">No. Whatsapp</label>
        <input type="tel" id="phone" name="phone" value="<?= esc($user['whatsapp']); ?>" required>
      </div>
      <div>
        <label for="address">Alamat</label>
        <textarea id="address" name="address" required><?= esc($user['address']); ?></textarea>
      </div>
      <button type="submit">Simpan</button>
    </form>
  </div>
</body>
</html>
