<?php

session_start(); 
  
  // Importation de la classe Model
  include_once('admin/model/Model.php');
  include_once('panier.php');

  $model = new Model;

  if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $designation = $_POST['designation'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];
    $qte =1;
    $tot = $qte * $prix;

    $produit = array(
      'id' => $id,
      'designation' => $designation,
      'prix' => $prix,
      'image' => $image,
      'qte' => $qte,
      'tot' => $tot,
    );

    ajouterProduitAuPanier($produit);
    
    echo '
        <div class="alert alert-success alert-dismissible" id="msg" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Article ajouté dans le panier</h6>
        </div> ';

    
  }

  //Recupérer le nombres d'articles en panier selon l'adresse Ip utilisateur
  if (isset($_GET['cartItem']) && $_GET['cartItem'] == "cart_item") {
    $data_item = obtenirContenuPanier();

    echo count($data_item);

  }

  //Suppression de l'article dans le panier
  if (isset($_GET['remove'])) {
    $id = $_GET['remove'];

    supprimerProduitDuPanier($id);

    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = 'Article supprimé du panier';
    
    header('Location:cart');
  }

  //Suppression de tous les articles dans le panier
  if (isset($_GET['clear'])) {

    viderPanier();

    header('Location:cart');

  }

  //Mise à jour de la quantité et prix total dans le panier
  if (isset($_POST['qte'])) {
    $id = $_POST['id_produit'];
    $prix = $_POST['prix_produit'];
    $qte = $_POST['qte'];

    $total = $prix * $qte;

    modifierProduitDuPanier($qte,$total,$id);

    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = 'Article modifié ';
    
    header('Location:cart');
  }

  //Payement de la commande
  if (isset($_POST['action']) && $_POST['action'] == 'order') {
    if (!empty($_POST['idCli'])&& !empty($_POST['name'])&& !empty($_POST['tel'])&& !empty($_POST['adresse'])&& !empty($_POST['mode_paie'])) {
      $items = $_POST['items'];
      $prix_tot = $_POST['prix_tot'];
      $name = $_POST['name'];
      $email = isset($_POST['email'])?$_POST['email']:'null';
      $tel = $_POST['tel'];
      $adresse = $_POST['adresse'];
      $mode_paie = $_POST['mode_paie'];
      $id_client = $_POST['idCli'];

      if ($add_data = $model->addOrder($name,$email,$tel,$mode_paie,$items,$prix_tot,$adresse,$id_client)) {

        viderPanier();

        echo '
          <div class="alert alert-success alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Commande envoyée avec succès</h6>
          </div> ';
      }else{
        echo '
          <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Une erreur est survenue</h6>
          </div> ';
      }
    }else{
    echo '
        <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h6>Compléter votre information</h6>
        </div> <br>     
        ';
    }
    
  }

  //Ajout produit aux favoris
  if (isset($_POST['action']) && $_POST['action'] == 'add_fav') {
    if (!empty($_POST['idP'])&& !empty($_POST['idC'])) {
      $idP = $_POST['idP'];
      $idC = $_POST['idC'];

      if ($add_data = $model->addFavoris($idP,$idC)) {
        echo '
          <div class="alert alert-success alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Produit ajouté aux favoris avec succès</h6>
          </div> ';
      }else{
        echo '
          <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Une erreur est survenue</h6>
          </div> ';
      }
    }else{
    echo '
        <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h6>Une erreur est survenue</h6>
        </div> <br>     
        ';
    }
    
  }


?>