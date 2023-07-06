<?php 
  
  require_once '../model/Model.php';

  //Appel de la classe Model
  $model = new Model;

  if (isset($_POST['id'])AND isset($_POST['nom'])AND isset($_POST['montant']) ){

      if (!empty($_POST['nom'])AND!empty($_POST['montant'])AND!empty($_POST['date_paye'])) {

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $montant = $_POST['montant'];
        $date_paye = $_POST['date_paye'];
        $detail = $_POST['detail'];

        if ($add_data = $model->editCreance($nom,$montant,$date_paye,$detail,$id)) {
                
            echo '
              <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>Créance modifiée avec succès</h6>
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