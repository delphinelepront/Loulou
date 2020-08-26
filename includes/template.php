<!DOCTYPE html>
<html>
<head>
    <title>CLS - OPTIONS</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="team" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="Public/css/owl.carousel.css">
    <link rel="stylesheet" href="Public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Public/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="Public/css/style.css">

</head>
<body>

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>

<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- LOGO TEXT -->
            <a href="index.php" class="navbar-brand">CLS</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Utilisateur</a></li>
                <li><a href="#">Groupe</a></li>
                <li><a href="#">Projet</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </div>

    </div>
</section>

<!-- FEATURE -->
<section id="home" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-3 col-md-6 col-sm-12">
                <div class="home-info">
                    <p><?= $content; ?></p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- SCRIPTS -->
<script src="Public/js/jquery.js"></script>
<script src="Public/js/bootstrap.min.js"></script>
<script src="Public/js/jquery.stellar.min.js"></script>
<script src="Public/js/owl.carousel.min.js"></script>
<script src="Public/js/smoothscroll.js"></script>
<script src="Public/js/custom.js"></script>

</body>
<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="copyright-text col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <p>Copyright &copy; 2020 CLS - TimeViewer</p>
                </div>
            </div>
        </div>
</footer>
</html>
