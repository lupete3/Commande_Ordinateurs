<?php 
  $title = 'Gestion Produits';
  require_once('include/headerAdmin.php'); 

  $model = new Model;

  $profile_admin = $model->profileAdmin($id);

  foreach ($profile_admin as $res) {
    $nom = $res['nom_complet'];
    $email = $res['email'];
    $telephone = $res['telephone'];
    $type = $res['type'];
    $login = $res['login'];
    $password = $res['password'];
  }


 ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php 
      if ($type_user != 'Admin') {
        include('include/sidebarGerant.php');
      }else{
        include('include/sidebarAdmin.php');;
      }
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2 content-wrapper">
              <div class="col-sm-12">
                <h1>Profile</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <?php 
              if (isset($_GET['success'])) {
                echo '
                  <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h6>Modifications effectuées avec succès</h6>
                  </div>
                ';
              }else if (isset($_GET['error'])) {
                echo '
                  <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h6>L\' ancien mot de passe n\'est pas correct</h6>
                  </div>
                ';
              }
             ?>
          </div>
          <div class="col-md-5">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="img/avatar.png" style="width: 60px;" 
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $nom ?></h3>

                <p class="text-muted text-center"><?php echo $type ?></p>
                <hr>                

                <div class="card-body">
                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                <p class="text-muted">
                  <?php echo $email ?>
                </p>

                <hr>

                <strong><i class="fas fa-phone mr-1"></i> Téléphone</strong>

                <p class="text-muted"><?php echo $telephone ?></p>

                <hr>

                <strong><i class="fas fa-user mr-1"></i> Login</strong>

                <p class="text-muted"><?php echo $login ?></p>

                <hr>

              </div>

              </div>
              <!-- /.card-body -->
            </div><br>
            <!-- /.card -->
          </div>
          <div class="col-md-7">
            <form action="" id="form" method="POST" enctype="multipart/form-data">
       
            <div class="card ">
              <div class="card-header text-uppercase">Modifier le profile</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-12">
                      <!-- Affichage de la notification -->
                      <div id="result">
                        
                      </div>
                      </div>
              
                      <div class="col-md-12">
                        <label for="nom"><b>Nom</b></label>
                        <input type="text" id="nom" name="nom" value="<?php echo $nom ?>" class="form-control" placeholder=""  autocomplete="off">
                        <label for="email"><b>Email</b></label>
                        <input type="email" id="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder=""  autocomplete="off">
                        <label for="phone"><b>Téléphone</b></label>
                        <input type="" id="phone" name="phone" value="<?php echo $telephone ?>" class="form-control" placeholder=""  autocomplete="off">
                        <label for="login"><b>Login</b></label>
                        <input type="text" id="login" name="login" value="<?php echo $login ?>" class="form-control" placeholder=""  autocomplete="off" required>
                        <label for="ancien"><b>Ancien mot de passe</b></label>
                        <input type="password" id="ancien" name="ancien" class="form-control" placeholder=""  autocomplete="off" required>
                        <label for="nouveau"><b>Nouveau Mot de passe</b></label>
                        <input type="password" id="nouveau" name="nouveau" class="form-control" placeholder=""  autocomplete="off" required><br>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" name="save_edit" id="save_edit" class="btn btn-md btn-primary "><i class="fa fa-check-circle"></i> Mettre à jour les modifications </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-8">
             
            
          </div>
        </div>
        <br>

      <!-- Sticky Footer -->
      <?php include('include/footer.php'); ?>

      <script>

        
      </script>

<!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


  <?php
    if(isset($_POST['save_edit'])){
      if(!empty($_POST['login']) || !empty($_POST['ancien']) || !empty($_POST['nouveau'])){
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $login = $_POST['login'];
        $ancien = $_POST['ancien'];
        $nouveauPassword = password_hash($_POST['nouveau'], PASSWORD_DEFAULT);

        if (password_verify($ancien, $password)) { 


          if($model->editAdmin(
            $nom,
            $email,
            $phone,
            $login,
            $nouveauPassword,
            $id
          )){ ?>

            <script type="text/javascript">
            window.location = 'profile.php?success=Valide';
            </script>

          <?php }
        
        }else{ ?>
          
          <script type="text/javascript">
            window.location = 'profile.php?error=Ancien mot de passe est incorrect';
          </script>
        
        <?php }
      }else{ ?>

        <script type="text/javascript">
            window.location = 'profile.php?error=Copléter tous les champs';
        </script>

      <?php }
                
    }

  ?>
