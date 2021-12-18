<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link href="<?= base_url(); ?>/landingpage/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">

            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-3"><?= $title ?></h3>
                                </div>
                                <div class="card-body">
                                    <form action="/User/update/<?= $users->id; ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="id" value="<?= $users->id; ?>">
                                        <input type="hidden" name="imglama" value="<?= $users->user_img ?>">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="email" placeholder="<?= lang('Auth.email') ?>" value=" <?= $users->email; ?>" disabled />
                                            <label for="inputEmail"> <?= lang('Auth.email') ?></label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" type="text" placeholder="<?= lang('Auth.email') ?>" value="<?= (old('username')) ? old('username') : $users->username; ?>" />
                                            <label for="inputEmail"> <?= lang('Auth.username') ?></label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="fullname" type="text" placeholder="Full Name" value="<?= (old('fullname')) ? old('fullname') : $users->fullname; ?>" />
                                            <label for="inputEmail"> Full Name </label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="col-sm-3">
                                                <img src="/img/<?= $users->user_img ?>" id="img-preview" class="img-thumbnail img-preview" alt="">
                                            </div>
                                            <div class="input-group col-sm-8">
                                                <input type="file" class="form-control" id="user_img" name="user_img" onchange="previewImg()">
                                                <label class="input-group-text" for="sampul">Input</label>

                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block"> Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= route_to('/') ?>">Back To Home</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-3 mt-3 bg-white">
                <div class="container px-5">
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/js/scripts.js"></script>
    <script>
        function previewImg() {
            const user_img = document.querySelector('#user_img');
            const imgPreview = document.querySelector('.img-preview');

            const filesampul = new FileReader();
            filesampul.readAsDataURL(user_img.files[0]);

            filesampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>