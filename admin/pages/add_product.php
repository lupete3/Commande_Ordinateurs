<?php 
  
  require_once '../model/Model.php';

  //Appel de la classe Model
  $model = new Model;

  if (isset($_POST['designation']) && isset($_POST['prix']) && isset($_POST['qte']) && isset($_POST['categorie'])&& isset($_POST['disponible']) && isset($_FILES['file']['name'])){

    if (!empty($_POST['designation']) && !empty($_POST['prix']) && !empty($_POST['qte']) && !empty($_POST['categorie'])&& !empty($_POST['disponible'])&& !empty($_POST['detail']) && !empty($_FILES['file']['name'])) {

        $designation = $_POST['designation'];
        $prix = $_POST['prix'];
        $qte = $_POST['qte'];
        $categorie = $_POST['categorie'];
        $disponible = $_POST['disponible'];
        $detail =  $_POST['detail'];
        $filename = $_FILES['file']['name'];

        /* Location */
         $location = "../../img/".$filename;
         $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
         $imageFileType = strtolower($imageFileType);

         /* Valid extensions */
         $valid_extensions = array("jpg","jpeg","png","jfif");

         /* Check file extension */
        if(in_array(strtolower($imageFileType), $valid_extensions)) {
          $newname = rand() . "." . $imageFileType;
          $location = "../../img/". $newname;
          /* Upload file */
          if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            $product_exist = $model->produitExists($designation,$prix,$categorie);

            if (!empty($product_exist)) {
              echo '
                <div class="alert alert-info alert-dismissible" id="msg" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h6>Cet Article existe déjà dans le système</h6>
                </div> ';
            }else{

              if ($add_data = $model->insertData($designation,$prix,$qte,$categorie,$disponible,$detail,$newname)) {
                
                echo '
                  <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h6>Article ajouté avec succès</h6>
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
                  <h6>Une erreur est survenu lors de l\'importation de la photo</h6>
              </div> ';  
          }
        }else{
          echo '
            <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h6>Choisissez un bon format de la photo</h6>
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