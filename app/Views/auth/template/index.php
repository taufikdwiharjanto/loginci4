<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Website</title>
    <link href="<?= base_url(); ?>/landingpage/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">

            <?= $this->renderSection('content'); ?>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-3 mt-3 bg-white">
                <div class="container px-5">
                    <p class="m-0 text-left text-blue small">Copyright &copy; Your Website 2021</p>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/js/scripts.js"></script>
</body>

</html>