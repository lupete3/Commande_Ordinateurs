<?php 
  $title = 'Gestion Publicité';
  require_once('include/headerAdmin.php'); 

  $id = $_GET['idAr'];

  $model = new Model;

  $data = $model->getPublicite($id);


?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebarAdmin.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">Tableau de Bord</a>
          </li>
          <li class="breadcrumb-item active">Modifier une publicité</li>
        </ol>
        <form action="" method="POST" id="form" enctype="multipart/form-data">
        <div class=" col-md-12 text-right" style="margin-bottom: 5px;">
          <button type="submit" id="edit_produit" name="save" class="btn btn-sm btn-primary "><i class="fa fa-check-circle"></i> Modifier </button>
          <a href="publicite.php" title=""><button type="button" class="btn btn-sm btn-secondary "><i class="fa fa-list"></i> Liste des items</button></a>
        </div>
        <!-- DataTables Example -->
       <div class="card  mt-8">
      <div class="card-header text-uppercase">Modifier une publicité</div>
      <div class="card-body">
        
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                 <!-- Affichage de la notification -->
                 <?php if (isset($_GET['error'])) {
                   echo '
                    <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h6>Completer tous les champs</h6>
                    </div> ';
                 } ?>
                 <div id="result">
                   
                 </div>
              </div>

              <?php foreach($data as $res): ?>
              
              <div class="col-md-4">
                <input type="hidden" id="id" value="<?php echo $res['id']; ?>" name="id" class="form-control" placeholder="Designation du produit"   autocomplete="off">
                <label for="designation"><b>Titre</b></label>
                <input type="text" id="designation" value="<?php echo $res['titre']; ?>" name="designation" class="form-control" placeholder="Designation du produit"   autocomplete="off">
                <br>
                <input type="file"  name="file" class="" onchange="previewFile(this);"  id="file" multiple="" ><br>
                <div class='preview'>
                  <img src="../../img/<?php echo $res['image']; ?>" id="previewImg" width="300" height="200">
                </div>       
              </div>
              
              <div class="col-md-8">
                
                <div class="form-group">
                    <label for=""> <b>Description Produit</b></label>
                    <textarea class="form-control product_description" id="detail" name="detail" rows="8" cols="80" requried style="color: black;"><?php echo $res['detail'] ?></textarea>
                </div>
              </div>
            <?php endforeach; ?>
              <div class="col-md-12">
                
              </div>
            </div>
          </div>
        </form>
        
      </div>
    </div>

      </div>
      <div class="spacer" style="margin-top: 6px;">
      </div>

      <!-- Sticky Footer -->
      <?php include('include/footer.php'); ?>

      <script>
        //$("#previewImg").hide();

        function previewFile(input){
          var file = $("input[type=file]").get(0).files[0];
   
          if(file){
            var reader = new FileReader();
   
            reader.onload = function(){
              $("#previewImg").attr("src", reader.result);
              //$("#previewImg").show();
            }
            reader.readAsDataURL(file);
          }
        }

        $(document).on("click","#edit_produit", function(e){
          e.preventDefault();

          var id = $("#id").val();
          var designation = $("#designation").val();
          var detail = $("#detail").val();

          var fd = new FormData();
          var files = $('#file')[0].files;

          var add_produit = $("#edit_produit").val();

          fd.append('file',files[0]);
          fd.append('id',id);
          fd.append('designation',designation);
          fd.append('detail',detail);
        
          $.ajax({
            url: 'edit_publicite.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
              $("#result").html(response);
              $("#img").attr("src",response); 
              $("#form")[0].reset();
            },
          }); 
        });

      </script>

        <!-- bootstrap-wysiwyg -->

        <script src="js/editor/jquery-te-1.4.0.min.js" type="text/javascript"></script>   
        <!-- https://jqueryte.com/ -->
        <script>
            $('.product_description').jqte({
                link: true,
                unlink: false,
                color: false,
                source: false,
            });
        </script>
  
