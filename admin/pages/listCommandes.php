<?php 

    $title = 'Liste des produits';

    require_once('include/headerAdmin.php'); 

    $model = new Model;

    $list_command = $model->getAllVentes();


?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebarAdmin.php'); ?>

    <div id="content-wrapper" class="container-fluid">

      <div class="container-fluid">

        <div id="result">
          
        </div>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">Tableau de bord</a>
          </li>
          <li class="breadcrumb-item active">Liste des commandes produits</li>
        </ol>
        <span class="etat"></span>
        <!-- DataTables Example -->
       <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Liste des commandes produits 
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Date Commande</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Designation</th>
                    <th>Prix Commande</th>
                    <th>Mode Paiement</th>
                    <th>Adresse Livraison</th>
                    <th>Remise</th>
                    <th>Prix Total Commande</th>
                    <th>Code Transaction</th>
                    <th>Etat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php 
                    if (!empty($list_command)) {
                      foreach ($list_command as $res) {
                    ?>

                  <tr style="font-size: 13px;">
                    <input type="hidden" min="1" value="<?= $res['id'];?>" class="form-control id_com">
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['date_vente'] ?></td>
                    <td><?php echo $res['nom'] ?></td>
                    <td><?php echo $res['email'] ?></td>
                    <td><?php echo $res['phone'] ?></td>
                    <td><?php echo $res['produits'] ?></td>
                    <td><?php echo number_format($res['prix_total'],2) ?> $</td>
                    <td><?php echo ($res['paye_mode'] == 'Livraison')?'<span class="badge badge-warning">'.$res['paye_mode'].' </span>':'<span class="badge badge-primary">'.$res['paye_mode'].' </span>'  ?></td>
                    <td><?php echo $res['adresse'] ?></td>
                    <td><input type="number" min="1" value="<?= $res['remise'];?>" class="form-control itmQt"></td>
                    <td><?php echo number_format(($res['prix_total']-$res['remise']), 2) ?> $</td>
                    <td><?php echo $res['num_transaction'] ?></td>

                    <td>
                      <?php 
                        if ($res['livraison'] == "encours") {
                          echo '<span class="badge badge-warning">Encours </span>';
                        }else 
                        if ($res['livraison'] == "livre") {
                          echo '<span class="badge badge-success">Livré</span>';
                        }else 
                        if ($res['livraison'] == "annule") {
                          echo '<span class="badge badge-danger">Annulée</span>';
                        }else 
                        if ($res['livraison'] == "accepte") {
                          echo '<span class="badge badge-info">Acceptée</span>';
                        }
                      ?>
                    </td>
                    <td>
                      <?php 
                        if ($res['livraison'] == "encours") { ?>
                          <button type="button" value="<?php echo $res['id'] ?>" class="btn btn-sm btn-primary btnVal"><i class="fa fa-checkg"></i> Valider</button>
                          <button type="button" value="<?php echo $res['id'] ?>" class="btn btn-sm btn-danger btnAnn" > Annuler</button>
                        <?php }else 
                        if ($res['livraison'] == "livre") { ?>
                          
                        <?php }else 
                        if ($res['livraison'] == "annule") { ?>
                          
                        <?php }else 
                        if ($res['livraison'] == "accepte") { ?>
                          <button type="button" value="<?php echo $res['id'] ?>" class="btn btn-sm btn-success btnLiv"><i class="fa fa-checkg"></i> Livrer</button>
                        <?php }
                      ?>                   
                  </td>
                  </tr>
                  <?php }

                  }else { ?>
                    <tr>
                      <td class="text-center" colspan="9" rowspan="" headers=""><h3>Aucune donné trouvée </h3></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
        
  
 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
    
  <!-- Bootstrap core JavaScript-->


  <script type="text/javascript">
    
    //Actualiser le prix total apès changement de la remise
      $(".itmQt").on("change", function(){

        var $element = $(this).closest("tr");

        var id_com = $element.find('.id_com').val();
        var remise = $element.find('.itmQt').val();

        $.ajax({
          url:'action_admin.php',
          type:'post',
          cache:false,
          data:{id_com:id_com,remise:remise},
          success:function(response){
            location.reload(true);
            alert("Remise accordée avec success");
          }
        });

      });
    //Valider une commande
      $(".btnVal").on("click", function(){
        var $element = $(this).closest("tr");

        var id_val = $element.find('.id_com').val();

        $.ajax({
          url:'action_admin.php',
          type:'post',
          cache:false,
          data:{id_val:id_val},
          success:function(response){
            location.reload(true);
            alert("Commande validée avec success");
          }
        });
      });
    //Annuler une commande
      $(".btnAnn").on("click", function(){
        if(window.confirm('Voulez-vous annuler cette commande ?')){
          var $element = $(this).closest("tr");

          var id_ann = $element.find('.id_com').val();

          $.ajax({
            url:'action_admin.php',
            type:'post',
            cache:false,
            data:{id_ann:id_ann},
            success:function(response){
              location.reload(true);
              alert("Commande annulée avec success");
            }
          });
        }
        
      });
    //Livrer une commande
      $(".btnLiv").on("click", function(){
        if(window.confirm('Vous ête sur que cette commade est bien livrée ?')){
          var $element = $(this).closest("tr");

          var id_liv = $element.find('.id_com').val();

          $.ajax({
            url:'action_admin.php',
            type:'post',
            cache:false,
            data:{id_liv:id_liv},
            success:function(response){
              location.reload(true);
              alert("Commande livrée avec success");
            }
          });
        }
        
      });
  </script>

</body>

</html>
