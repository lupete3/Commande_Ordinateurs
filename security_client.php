<?php 
  session_start();

  $id =  ((isset($_SESSION['id']))?$_SESSION['id']:null);
  $username =  ((isset($_SESSION['username']))?$_SESSION['username']:null);
  $telephone =  ((isset($_SESSION['telephone']))?$_SESSION['telephone']:null);
  $email =  ((isset($_SESSION['email']))?$_SESSION['email']:null);
  $avenue =  ((isset($_SESSION['avenue']))?$_SESSION['avenue']:null);
  $quartier =  ((isset($_SESSION['quartier']))?$_SESSION['quartier']:null);
  $commune =  ((isset($_SESSION['commune']))?$_SESSION['commune']:null);
  $ville =  ((isset($_SESSION['ville']))?$_SESSION['ville']:null);
  $province =  ((isset($_SESSION['province']))?$_SESSION['province']:null);

  $type = "Client";
?>