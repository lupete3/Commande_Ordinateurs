<?php 
  include('../model/security_adm.php');
  require_once ('../model/Model.php'); 
  
  $model1 = new Model;

  $totCom = $model1->getCountAllVentesCritere("encours");

  if ($totCom > 0) {
    foreach($totCom as $dt):
      $comEncours = $dt['tot'];
    endforeach;
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/editor/css/jquery-te-1.4.0.css">

</head>

<style>
  .spacer{
    margin-top: 30px;
  }
</style>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark static-top " style="background-color: #166d94;">

    <a class="navbar-brand mr-1" href="admin.php">Espace Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-fw fa-tachometer-alt"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="listCommandeEncours.php" id="userDropdown" >
          Commandes encours <i class="badge badge-danger "><?php echo $comEncours ?></i><i class="fa fa-shopping-cart "></i>
        </a>
      </li>
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Paramètres Compte <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          <a class="dropdown-item" href="profile">Profile <?php echo $username;?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../model/deconnexion" >Déconnexion</a>
        </div>
      </li>
      
    </ul>

  </nav>
