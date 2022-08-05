<?php 
  
  require_once '../model/Model.php';

  //Appel de la classe Model
  $model = new Model;

  if (isset($_POST['id']) && isset($_POST['titre']) && isset($_POST['detail']) && isset($_POST['description'])){

    if (!empty($_POST['id']) &&! empty($_POST['titre']) && !empty($_POST['detail']) && !empty($_POST['description']) ) {

        $id = $_POST['id'];
        $titre = $_POST['titre'];
        $detail = $_POST['detail'];
        $description = $_POST['description'];

        if(empty($_FILES['file']['name'])){
            if ($add_data = $model->insertArticle($id,$titre,$detail,$description,$newname='')) {
                
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
        }else{

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

                if ($add_data = $model->insertArticle($id,$titre,$detail,$description,$newname)) {
                    
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