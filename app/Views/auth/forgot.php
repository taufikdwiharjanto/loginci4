<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4"><?= lang('Auth.forgotPassword') ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="small mb-3 text-muted">
                            <p><?= lang('Auth.enterEmailForInstructions') ?></p>
                        </div>
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= route_to('forgot') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="form-floating mb-3">
                                <input class="form-control  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="inputEmail" type="email" name="email" placeholder="<?= lang('Auth.email') ?>" />
                                <label for="inputEmail"><?= lang('Auth.emailAddress') ?></label>
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-8 mb-0">
                                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.sendInstructions') ?></button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="small" href="<?= route_to('login') ?>">Return to login</a>
                        <div class="small">Need an account ? <a href="<?= route_to('register') ?>">Sign up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>