<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <!-- Logo Section -->
                                <div class="text-center mb-4">
                                    <div style="
                                        display: inline-block;
                                        width: 180px;
                                        height: 165px;
                                        background-color: rgba(248, 249, 252, 0);
                                        border: 19px solid rgba(154, 166, 178, 0);
                                        border-radius: 10px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        margin: 0 auto;">
                                        <img src="<?= base_url('assets/images/All Jas.png'); ?>" alt="Logo" style="max-width: 150%; max-height: 150%;">
                                    </div>
                                </div>

                                <!-- Title -->
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                </div>

                                <!-- Error Messages -->
                                <?php if (session('error')) : ?>
                                    <div class="alert alert-danger"><?= session('error') ?></div>
                                <?php endif; ?>

                                <?php if (session('success')) : ?>
                                    <div class="alert alert-success"><?= session('success') ?></div>
                                <?php endif; ?>

                                <!-- Form -->
                                <form action="<?= base_url('register/store') ?>" method="post" class="user">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?= session('error') ? 'is-invalid' : '' ?>" name="username"
                                            placeholder="Username" value="<?= old('username') ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user <?= session('error') ? 'is-invalid' : '' ?>" name="email"
                                            placeholder="Email" value="<?= old('email') ?>">
                                        <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email Anda.</small>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user <?= session('error') ? 'is-invalid' : '' ?>" name="password"
                                                placeholder="Password" autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" name="pass_confirm" class="form-control form-control-user <?= session('error') ? 'is-invalid' : '' ?>"
                                                placeholder="Ulangi Password" autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('forgot-password') ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <p><a class="small" href="<?= base_url('login') ?>">Sudah Punya Akun? Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
