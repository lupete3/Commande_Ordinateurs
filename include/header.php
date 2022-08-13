<?php 
  require_once ('admin/model/connex.php'); 

  $dt = date('Y-m-d');

  $req = $bd->prepare("SELECT * FROM entreprise ");
  $req->execute();
  $entreprise = $req->fetch();

  include_once('security_client.php');

  $ip = $_SERVER['REMOTE_ADDR'];

  $title = 'New Technologie Center'; 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/entreprisepond/1.4.2/entreprisepond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all" class="">
      <!-- Top bar-->
      <div class="top-bar cache">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contactez-nous sur <?= $entreprise['contact_phone']?> ou <?= $entreprise['contact_email']?> . <span class="test"></span> </p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <?php echo ((!empty($username))?
                '
                  <div class="login"><a href="client_espace.php" class="login-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Compte '.$username.'</span></a><a href="deconnexion.php" class="signup-btn"><i class="fa fa-lock"></i><span class="d-none d-md-inline-block">Déconnexion</span></a></div>
                ':
                '
                <div class="login"><a href="client_register.php" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Se connecter</span></a><a href="client_register.php" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">S\'inscrire</span></a></div>
                '); ?>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Connexion Client </h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="form-login-client-nav">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="Email ou Téléphone" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="Mot de passe" class="form-control">
                </div>
                <p class="text-center">
                  <button type="button" id="btnLogCliNav" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Connexion</button>
                </p>
              </form>
              <p class="text-center text-muted">Vous n'avez pas encore de compte?</p>
              <p class="text-center text-muted"><a href="client_register.php"><strong>Créer un compte maintenat</strong></a>! C'est facile, dans 1  minute et nous vous donnerons un accès spécial et une bonne reduction!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky cache">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg ">
          <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/<?= $entreprise['logo']?> " height="60" width="187" alt="<?= $entreprise['nom']?>" class="d-none d-md-inline-block"><img src="img/<?= $entreprise['logo']?>" height="50" width="187" alt="<?= $entreprise['nom']?>" class="d-inline-block d-md-none"><span class="sr-only"><?= $entreprise['nom']?></span></a>
            <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="cart.php" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i><span class="badge badge-warning badge-pill cart-item" ></span> </span></a>
          </div>

            
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto text-white">
                <li class="nav-item <?php echo $index ?> "><a href="index.php" class="">Accueil <b class="caret"></b></a></li>
                <li class="nav-item <?php echo $shop ?>"><a href="shop.php" class="">Shop </a></li>
                <li class="nav-item <?php echo $blog ?>"><a href="blog.php" class="">Blog </a></li>
                <li class="nav-item <?php echo $contact ?>"><a href="contact.php" class="">Contact </a></li>

                
                <!-- ========== Contact dropdown end ==================-->
              </ul>
              <div class="navbar-buttons d-flex justify-content-end">
                <!-- /.nav-collapse-->
                <div id="" class="navbar-collapse collapse "></div>
                  <a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"> </i> </a> &nbsp;

                <div id="basket-overview" class="bg-white">
                  <a href="cart.php" class=" " ><i style="font-size: 20px; margin-top: 10px;" class="fa fa-shopping-cart"></i><span> <span class="badge badge-warning badge-pill cart-item" ></span> </span></a></div>
              </div>
            </div>
            
          </div>
        </div>
        
      </header>
      <div class="container">
          <div id="search" class="collapse">
            <br>
            <div class="container">
              <form role="search" id="formSearc" class="ml-auto">
                <div class="input-group">
                  <input type="text" name="searc" id="searc" placeholder="Rechercher un acticle ici" class="form-control">
                  <div class="input-group-append">
                    <button type="button" id="btnSearch" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <br>
          </div>
      </div>
      

      