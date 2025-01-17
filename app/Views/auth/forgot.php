<?= $this->extend('Layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <h2 class="card-header">Lupa Password</h2>
                <div class="card-body">

                    <?php if (session('error')) : ?>
                        <div class="alert alert-danger"><?= session('error') ?></div>
                    <?php endif; ?>

                    <?php if (session('message')) : ?>
                        <div class="alert alert-success"><?= session('message') ?></div>
                    <?php endif; ?>

                    <p>Masukkan alamat email Anda untuk mendapatkan instruksi pemulihan password.</p>

                    <form action="<?= base_url('login/authenticate') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" class="form-control <?= session('error') ? 'is-invalid' : '' ?>" 
                                   name="email" id="email" placeholder="Masukkan email Anda">
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block">Kirim Instruksi</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
