<?php 
  
  require_once '../model/Model.php';

  //Appel de la classe Model
  $model = new Model;

  if (isset($_POST['id'])){

      if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['login']) && !empty($_POST['password'])) {

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        if ($add_data = $model->editUser($nom,$email,$telephone,$login,$password,$id)) {
                
            echo '
              <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>Utilisateur modifié avec succès</h6>
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