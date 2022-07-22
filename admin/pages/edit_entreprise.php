<?php 
  
  require_once '../model/Model.php';

  //Appel de la classe Model
  $model = new Model;

  if (isset($_POST['nom']) && isset($_POST['adresse'])&& isset($_POST['telephone'])&& isset($_POST['email'])){

    if (!empty($_POST['nom']) && !empty($_POST['adresse'])&& !empty($_POST['telephone'])&& !empty($_POST['email'])) {

        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];

        if (!empty($_FILES['file']['name'])) {
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

              if ($add_data = $model->editEntreprise($nom,$adresse,$telephone,$email,$newname)) {
                  
                  echo '
                    <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h6>Informations modifiées avec succès</h6>
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

          if ($add_data = $model->editEntreprise($nom,$adresse,$telephone,$email,$newname="")) {
                  
            echo '
              <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>Informations modifiées avec succès</h6>
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