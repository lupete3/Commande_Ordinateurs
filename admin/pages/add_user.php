<?php 
  
  require_once '../model/Model.php';

  //Appel de la classe Model
  $model = new Model;

  if (isset($_POST['add_user']) ){

      if (!empty($_POST['nom']) AND !empty($_POST['telephone']) AND !empty($_POST['login']) AND !empty($_POST['password']) AND !empty($_POST['type'])) {

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        $user_exist = $model->userExists($nom);

        if (!empty($user_exist)) {
          echo '
            <div class="alert alert-info alert-dismissible" id="msg" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h6>Cet utilisateur existe déjà dans le système</h6>
            </div> ';
        }else{

          if ($add_data = $model->insertUser($nom,$email,$telephone,$login,$password,$type)) {
                
            echo '
              <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>Utilisateur ajouté avec succès</h6>
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
              <h6>Completer tous les champs</h6>
          </div> ';
      }
      
  }else{

    echo '
      <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h6>Completer tous les champs</h6>
      </div> ';
  }
?>