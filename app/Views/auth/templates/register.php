<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>


<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <!-- Logo Section -->
                  <div class="text-center mb-4">
                    <div style="
                        display: inline-block;
                        width: 180px;
                        height: 165px;
                        background-color: #f8f9fc;
                        border: 19px solid #9AA6B2;
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
                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.register') ?></h1>
                  </div>

                  <?= view('Myth\Auth\Views\_message_block') ?>

                  <!-- Form -->
                  <form action="<?= route_to('register') ?>" method="post" class="user">
                    <?= csrf_field() ?>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> " name="username"
                        placeholder="<?=lang('Auth.username')?> " value="<?= old('username') ?>"> 
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> " name ="email"
                        placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                        <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> " name="password"
                          placeholder="<?=lang('Auth.password') ?>" autocomplete="off">
                      </div>
                      <div class="col-sm-6">
                        <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> "
                          placeholder="<?=lang('Auth.repeatPassword')?> " autocomplete="off">
                      </div>
                    </div>
                    <button type = "submit" class="btn btn-primary btn-user btn-block" onclick="showPopup()">
                      <?=lang('Auth.register')?>
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <p><a class="small" href="<?= route_to('login') ?>"><?=lang('Auth.
                    alreadyRegistered') ?> <?= lang('Auth.signIn')?></a>
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