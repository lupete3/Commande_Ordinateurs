<?php 
  $title = 'Gestion Produits';
  require_once('include/headerAdmin.php'); 

  $model = new Model;

  $list_category = $model->getCategory();
  

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
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <?php 
              if ($type_user != 'Admin') {
                echo '<a href="gerant.php">Tableau de Bord</a>';
              }else{
                echo '<a href="admin.php">Tableau de Bord</a>';
              }
            ?>
          </li>
          <li class="breadcrumb-item active">Ajouter une créance</li>
        </ol>
        <div class="row">
          <div class="col-md-4">
            <form action="" id="form" method="POST" enctype="multipart/form-data">
       
        <!-- DataTables Example -->
            <div class="card ">
              <div class="card-header text-uppercase">Ajouter une créance</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-12">
                      <!-- Affichage de la notification -->
                      <div id="result">
                        
                      </div>
                      </div>
              
                      <div class="col-md-12">
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom créancier"  autocomplete="off"><br>
                        <input type="" id="montant" name="montant" class="form-control" placeholder="Montant Crédit"  autocomplete="off"><br>
                        <label for="date_paye">Date Estimation Payement</label>
                        <input type="date" id="date_paye" name="date_paye" class="form-control" placeholder="Nom créancier"  autocomplete="off"><br>
                        <label for="detail">Observation</label>
                        <textarea class="form-control " rows="3" id="detail" name="detail"> </textarea><br>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" name="add_categorie" id="add_categorie" class="btn btn-sm btn-success "><i class="fa fa-check-circle"></i> Enregistrer </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <!-- Affichage des données de la base de donnée -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Liste des catégories <div class="float-right">     
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Noms Créancier</th>
                      <th>Montant Crédit</th>
                      <th>Date Crédit</th>
                      <th>Date Estimation Payement</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody id="data_list">
                    
                  </tbody>
                </table>            
              </div>
            </div>  
            
          </div>
        </div>

        <!-- fenetre modal d'affichage donnée user -->
        <div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="Modregister" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content panel-danger">
              <div class="modal-header">
                <h4 class="modal-title" id="AddSectionLabel">Info Créance</h4>
                <button type="button" class="close btn " data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <form action="delete_agent.php" method="post" was-validate>
                  <div class="form-group">
                  </div>
                  <div class="form-group " id="ed_data" >
                    
                  </div><br>

                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-secondary btn-block" data-dismiss="modal" name="btn">Annuler </button>
                  <button type="submit" class="btn btn-primary btn-block" id="update" name="update"> Modifier </button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <!-- /.modal-content -->

      <!-- Sticky Footer -->
      <?php include('include/footer.php'); ?>

      <script>
        
        //Fonction pour afficher les catégories
        function getCreance(){
          $.ajax({
            url : "listCredit.php",
            type : "post",
            success : function(data){
              $("#data_list").html(data);
            }
          });
        }

        //Appel fonction qui affiche les catégories
        getCreance();

        //Enregistrement des données de la table catégorie
         $(document).on("click","#add_categorie", function(e){
          e.preventDefault();

          var nom = $("#nom").val();
          var montant = $("#montant").val();
          var date_paye = $("#date_paye").val();
          var detail = $("#detail").val();
        
          $.ajax({
            url: 'add_creance.php',
            type: 'post',
            data: {
              nom:nom,
              montant:montant,
              date_paye:date_paye,
              detail:detail,
            },
            success: function(response){
              getCreance();
              $("#result").html(response);
              $("#form")[0].reset();
            },
          });     
        });

         //Affichage fenetre modale de la catégorie
         $(document).on("click","#editBtn", function(e){
          e.preventDefault();

          $("#editForm").modal("show");

          var id = $(this).attr("value");

          $.ajax({
            url : "show_creance.php",
            type : "post",
            data : {
              id : id
            },
            success : function(data){
              $("#ed_data").html(data);
            }

          });

          //alert(id);
         });

         //Modification de la catégorie
         $(document).on("click","#update", function(e){
          e.preventDefault();
            var id = $("#idM").val();
            var nom = $("#nomM").val();
            var montant = $("#montantM").val();
            var date_paye = $("#date_payeM").val();
            var detail = $("#detailM").val();

           $.ajax({
              url:'edit_creance.php',
              type : "post",
              data : {
                id:id,
                nom:nom,
                montant:montant,
                date_paye:date_paye,
                detail:detail,
              },
              success : function(data){
                $("#editForm").modal("hide");
                getCreance();
                $("#result").html(data);
              }

           });
         });

         //Suppression de la catégorie
         $(document).on("click","#deleteBtn", function(e){
          e.preventDefault();

          if(window.confirm("Voulez-vous supprimer cette dette ?")){
            var id = $(this).attr("value");

            $.ajax({
              url:'delete_credit.php',
              type:'post',
              data:{
                id:id,
              },
              success : function(data){
                getCreance();
                $("#result").html(data);
              }
            });

          }
         });
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
