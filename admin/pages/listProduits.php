<?php 

    $title = 'Liste des produits';

    require_once('include/headerAdmin.php'); 

    $model = new Model;

    $list_product = $model->getAllProductAdmin();


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

    <div id="content-wrapper" class="container-fluid">

      <div class="container-fluid">

        <div id="result">
          
        </div>

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
          <li class="breadcrumb-item active">Liste des Produits</li>
        </ol>

        <!-- DataTables Example -->
       <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Liste des produits <div class="float-right">
               <a href="gProduits.php" class="btn btn-success btn-sm editBtn"><i class="fa fa-plus-circle"></i> Ajouter un nouvel Produit</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <span id="tot"></span>
              <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Designation</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Disponible</th>
                    <th>Image</th>
                    <th>Description de l'article</th>
                    
                    <?php 
                      if ($type_user != 'Admin') {
                        # code...
                      }else{
                        echo "<th>Action</th>";
                      }
                     ?>
                  </tr>
                </thead>
                
                <tbody>
                  <?php 
                    if (!empty($list_product)) {
                      foreach ($list_product as $res) {
                    ?>
                 
                  <tr style="font-size: 13px;">
                    
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['designation'] ?></td>
                    <td><?php echo $res['libelle'] ?></td>
                    <td><?php echo number_format($res['prix'],2) ?> $</td>
                    <td class="qte"><?php echo $res['quantite'] ?></td>
                    <td><?php echo $res['disponible'] ?></td>
                    <td><img src="../../img/<?php echo $res['image'] ?>" height="30" border="4" alt="">
                      <input type="hidden" id="path" value="<?php echo $res['image'] ?>" name="">
                     </td>
                    <td><?php echo $res['description'] ?></td>
                    <?php 
                      if ($type_user != 'Admin') {
                        # code...
                      }else{  ?>
                        <td>
                          <a href="show_product.php?idAr=<?php echo $res['id'] ?>" title=""><button type="button" class="btn btn-sm btn-primary "><i class="fa fa-edit"></i> </button></a><a href="" title=""><button type="button" value="<?php echo $res['id'] ?>" class="btn btn-sm btn-danger " id="supBtn"><i class="fa fa-trash"></i> </button></a>
                        </td>
                    <?php 
                      }
                     ?>
                    
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

    $(document).ready(function(){

          $('tr').each(function(){
            
          let qte = 0;
          let trCount = $('tr').length;
          for (var i = 1; i < trCount; i++) {
            let tdText = 
            $("tr:eq("+i+") td:eq(4)").text();
            qte += Number(tdText);
          }
          $('#tot').text(qte).text(qte);
          });
    });






    $(document).on("click","#supBtn", function(e){
          e.preventDefault();



          if(window.confirm("Voulez-vous masquer cet article ?")){
            var id = $(this).attr("value");

            var path = "../../img/"+$("#path").val();

            $.ajax({
              url:'delete_product.php',
              type:'post',
              data:{id:id,path:path},
              success : function(data){
                alert('Produit Supprimé avec succès');
                $("#result").html(data);

                window.location.reload();
              }
            });

          }
         });
  </script>

</body>

</html>
