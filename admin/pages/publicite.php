<?php  

    $title = 'Images Publicitaires';

    require_once('include/headerGerant.php');
     
    $model = new Model;

    $list_item = $model->getAllPublicites();


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
          <li class="breadcrumb-item active">Publicité</li>
        </ol>

        <!-- DataTables Example -->
       <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Publicité 
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Sous-titre</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php 
                    if (!empty($list_item)) {
                      foreach ($list_item as $res) {
                    ?>
                 
                  <tr style="font-size: 13px;">
                    
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['titre'] ?></td>
                    <td><?php echo $res['detail'] ?></td>
                    <td><a target="_blank" href="../../img/<?php echo $res['image'] ?>"><img src="../../img/<?php echo $res['image'] ?>" height="30" border="4" alt=""></a>
                      <input type="hidden" id="path" value="<?php echo $res['image'] ?>" name="">
                     </td>
                    <td>
                    <a href="show_publicite.php?idAr=<?php echo $res['id'] ?>" title=""><button type="button" class="btn btn-sm btn-primary "><i class="fa fa-edit"></i> Modifier</button></a>
                   
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
