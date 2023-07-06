<?php 
  
  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  //Enregistrement d'un nouveau client
  if (isset($_POST['action']) && $_POST['action'] == 'add_client') {
    if (!empty($_POST['nom'])&& !empty($_POST['telephone'])&& !empty($_POST['avenue'])&& !empty($_POST['quartier'])&& !empty($_POST['commune'])&& !empty($_POST['ville'])&& !empty($_POST['password'])) {
      $nom = $_POST['nom'];
      $telephone = $_POST['telephone'];
      $avenue = $_POST['avenue'];
      $quartier = $_POST['quartier'];
      $commune = $_POST['commune'];
      $ville = $_POST['ville'];

      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

      if ($telephone_exist = $model->phoneExists($telephone)) {
        echo '
          <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h6>Ce numéro de téléphone est existe déjà</h6>
          </div> ';
      }else{
        if ($add_data = $model->addClient($nom,$telephone,$avenue,$quartier,$commune,$ville,$password)) {
        echo '
          <div class="alert alert-success alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Votre compte est créé avec succès</h6>
          </div> ';
        }else{
          echo '
            <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h6>Une erreur est survenue</h6>
            </div> ';
        }
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

  //Connexion du client
  if (isset($_POST['action']) && $_POST['action'] == 'login_client') {
    if (!empty($_POST['telephone'])&& !empty($_POST['password'])) {
      $telephone = $_POST['telephone'];

      $password = $_POST['password'];

      if ($client_exist = $model->clientExists($telephone)) {
        foreach($client_exist as $res):
          if (password_verify($password, $res["password"])) {

            session_start();

            $_SESSION['id'] = $res["id"];
            $_SESSION['username'] = $res["nom_client"];
            $_SESSION['telephone'] = $res["telephone_client"];
            $_SESSION['email'] = $res["email_client"];
            $_SESSION['avenue'] = $res["avenue"];
            $_SESSION['quartier'] = $res["quartier"];
            $_SESSION['commune'] = $res["commune"];
            $_SESSION['ville'] = $res["ville"];
            $_SESSION['province'] = $res["province"];

            $_SESSION['client'] = 'client';

            echo 'success';
            
          }else{
            echo '
          <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Le mot de passe incorrecte</h6>
          </div> ';
          }
        
        endforeach;
      }else{
        echo '
          <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Ce numéro est incorrect </h6>
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


  //Envoi message 
  if (isset($_POST['action']) && $_POST['action'] == 'send_conatct') {
    if (!empty($_POST['nom'])&& !empty($_POST['postnom'])&& !empty($_POST['email'])&& !empty($_POST['objet'])&& !empty($_POST['message'])) {
      $nom = $_POST['nom'];
      $postnom = $_POST['postnom'];
      $email = $_POST['email'];
      $objet = $_POST['objet'];
      $message = $_POST['message'];

      if ($add_data = $model->addMessageClient($nom,$postnom,$email,$objet,$message)) {
        echo '
          <div class="alert alert-success alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Merci de nous avoir contacté</h6>
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


  //Ajout subscription aux newslater
  if (isset($_POST['action']) && $_POST['action'] == 'add_newsletter') {
    if (!empty($_POST['email'])) {
      $email = $_POST['email'];

      if ($add_data = $model->addSubscription($email)) {
        echo '
          <div class="alert alert-success alert-dismissible" id="msg" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6>Merci d\'avoir souscrit</h6>
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


?>