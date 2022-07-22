<?php 
  $title = 'Gestion Produits';
  require_once('include/headerAdmin.php'); 

  $id = $_GET['idAr'];

  $model = new Model;

  $list_category = $model->getCategory();

  $product = $model->getProduct($id);


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
          <li class="breadcrumb-item active">Modifier un Article</li>
        </ol>
        <form action="" method="POST" id="form" enctype="multipart/form-data">
        <div class=" col-md-12 text-right" style="margin-bottom: 5px;">
          <button type="submit" id="edit_produit" name="save" class="btn btn-sm btn-primary "><i class="fa fa-check-circle"></i> Modifier </button>
          <a href="listProduits.php" title=""><button type="button" class="btn btn-sm btn-secondary "><i class="fa fa-list"></i> Liste des articles</button></a>
        </div>
        <!-- DataTables Example -->
       <div class="card  mt-8">
      <div class="card-header text-uppercase">Modifier un Article</div>
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

              <?php foreach($product as $res): ?>
              
              <div class="col-md-4">
                <input type="hidden" id="id" value="<?php echo $res['id']; ?>" name="id" class="form-control" placeholder="Designation du produit"   autocomplete="off">
                <label for="designation"><b>Designation</b></label>
                <input type="text" id="designation" value="<?php echo $res['designation']; ?>" name="designation" class="form-control" placeholder="Designation du produit"   autocomplete="off">
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" value="<?php echo $res['prix']; ?>" class="form-control" placeholder="Prix du Produit"   autocomplete="off">
                <label for="qte"><b>Quantité disponible</b></label>
                <input type="number" id="qte" name="qte" value="<?php echo $res['quantite']; ?>" class="form-control" placeholder="Quantité disponible"   autocomplete="off">
                <label for="categorie"><b>Catégorie</b></label>
                <select name="categorie" id="categorie" class="form-control">
                  <option value="<?php echo $res['id_cat']; ?>"  selected=""><?php echo $res['libelle'] ?></option>
                  <?php 
                    if (!empty($list_category)) {
                      foreach($list_category as $row){
                    ?>
                  <option value="<?php echo $row['id']?>"><?php echo $row['libelle']?></option>
                  <?php }} ?>
                </select>
                <label for="disponible"><b>Disponible</b></label>
                <select name="disponible" id="disponible" required="" class="form-control">
                  <option value="<?php echo $res['disponible']; ?>"  selected=""><?php echo $res['disponible'] ?></option>
                  <option value="Non" selected="">Non</option>
                  <option value="Oui" selected="">Oui</option>
                </select><br>
                                
              </div>
              
              <div class="col-md-8">
                
                <div class="form-group">
                    <label for=""> <b>Description Produit</b></label>
                    <textarea class="form-control product_description" id="detail" name="detail" rows="8" cols="80" requried style="color: black;"><?php echo $res['description'] ?></textarea>
                </div>
                <input type="file"  name="file" class="" onchange="previewFile(this);"  id="file" multiple="" ><br>
                <div class='preview'>
                  <img src="../../img/<?php echo $res['image']; ?>" id="previewImg" width="100" height="100">
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
          var prix = $("#prix").val();
          var qte = $("#qte").val();
          var categorie = $("#categorie").val();
          var disponible = $("#disponible").val();
          var detail = $("#detail").val();

          var fd = new FormData();
          var files = $('#file')[0].files;

          var add_produit = $("#edit_produit").val();

          fd.append('file',files[0]);
          fd.append('id',id);
          fd.append('designation',designation);
          fd.append('prix',prix);
          fd.append('qte',qte);
          fd.append('categorie',categorie);
          fd.append('disponible',disponible);
          fd.append('detail',detail);
        
          $.ajax({
            url: 'edit_product.php',
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
  
