<?php 
  
  require_once '../model/Model.php';

  //Appel de la classe Model
  $model = new Model;

  

  if (isset($_POST['produit']) && isset($_POST['qte']) && isset($_POST['prix'])){

      if (!empty($_POST['produit']) && !empty($_POST['qte']) && !empty($_POST['prix']) ) {

        $produit = $_POST['produit'];
        $qte = $_POST['qte'];
        $prix = $_POST['prix'];
        $fournisseur = $_POST['fournisseur'];

        if ($add_data = $model->insertApprovProdMaison($produit,$qte,$prix,$fournisseur)) {

          $uptdate_data = $model->updateQteProdMaison($produit,$qte,$action='add');
                
          echo '
            <div class="alert alert-success alert-dismissible" id="msg" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>Aprovisionnement effectué avec succès</h6>
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