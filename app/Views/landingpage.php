<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/landingpage/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(); ?>/landingpage/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="">Landing Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href=""><?= user()->fullname; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="edit/<?= user()->id; ?>">Change User Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('logout'); ?>">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <img src="img/<?= user()->user_img; ?>" alt="" style="width:30%;border-radius: 75px; padding: 20px;">
                <h2 class="masthead-subheading mb-0">
                    Welcome <?= user()->username; ?>
                </h2>
                <h2 class="masthead-subheading mb-0">
                    with email <?= user()->email; ?>
                </h2>
                <h3 class="animasi-teks mt-2">
                    Have A Nice Day !!!
                </h3>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="<?= base_url('logout'); ?>">Sign Out</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Footer-->
    <footer class="py-3 bg-black">
        <div class="container px-5">
            <p class="m-0 text-left text-white small">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>/landingpage/js/scripts.js"></script>
</body>

</html>