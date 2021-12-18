<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4"><?= lang('Auth.resetYourPassword') ?></h3>
                    </div>
                    <div class="card-body">

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <p><?= lang('Auth.enterCodeEmailPassword') ?></p>

                        <form action="<?= route_to('reset-password') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="form-floating mb-3">
                                <input class="form-control  <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" type="text" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>" />
                                <label for="token"> <?= lang('Auth.token') ?></label>
                                <div class="invalid-feedback">
                                    <?= session('errors.token') ?>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" type="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" />
                                <label for="inputEmail"> <?= lang('Auth.email') ?></label>
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="inputPassword" type="password" placeholder="<?= lang('Auth.password') ?>" name="password" />
                                        <label for="inputPassword"><?= lang('Auth.newPassword') ?></label>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="inputPasswordConfirm" type="password" placeholder="<?= lang('Auth.repeatPassword') ?>" name="pass_confirm" autocomplete="off" />
                                        <label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
                                        <div class="invalid-feedback">
                                            <?= session('errors.pass_confirm') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.resetPassword') ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>