<?php 

  $shop = 'active';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $idC = $id;

  $model = new Model;

  $data_product = $model->getProduct($_GET['p']);

  $other_products = $model->getAllProductLimit(0,6);

  $all_categories = $model->getCategory();

  if ($data_product > 0) {
    foreach($data_product as $data):
      $id = $data['id'];
      $designation = $data['designation'];
      $description = $data['description'];
      $prix = $data['prix'];
      $image = $data['image'];
    endforeach;
  }

  if (!empty($idC)) {
    $product_exist = $model->productExistInfav($id,$idC);
    if ($product_exist > 0) {
      foreach($product_exist as $fav):
        $idPFav = $fav['id'];
      endforeach;
    }
  }

?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2 cat"><?= $designation ?> </h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <?php echo ((!empty($username))?
                '
                  <li class="breadcrumb-item"><a href="client_espace.php">Mon Espace</a></li>
                ':
                '
                  <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                '); ?>
                
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item active"><?= $designation ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              <div id="message">
                
              </div>
              
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="img/<?= $image ?>" alt="" class="img-fluid"></div>
                    <div> <img src="img/<?= $image ?>" alt="" class="img-fluid"></div>
                    <div> <img src="img/<?= $image ?>" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="box mt-auto mb-auto">
                    <form action="" class="form-submit">
                      <input type="hidden" class="idC" value="<?= $idC ?>" name="">
                      <input type="hidden" class="id" value="<?= $id ?>" name="">
                      <input type="hidden" class="designation" value="<?= $designation ?>" name="">
                      <input type="hidden" class="prix" value="<?= $prix ?>" name="">
                      <input type="hidden" class="image" value="<?= $image ?>" name="">
                 
                      <div class="sizes">
                        <h3><?= $designation ?></h3>
                        
                      </div>
                      <p class="price"><?= number_format($prix,2) ?>$</p>
                      <p class="text-center">
                        <button type="submit" class="btn btn-template-outlined addItemBtn"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
                        <?php echo ((!empty($username))?
                          ((!empty($idPFav))?
                            '<input type="text" class="idFav" value="'.$idPFav.'" name="">
                              <button type="submit" data-toggle="tooltip" data-placement="top" title="Rétirez de la liste des favoris" class="btn btn-default btnFavSup"><i class="fa fa-heart text-danger"></i></button>
                            ':
                            '
                              <button type="submit" data-toggle="tooltip" data-placement="top" title="Ajouter à la liste des favoris" class="btn btn-default btnFav"><i class="fa fa-heart-o"></i></button>
                            '):
                        '
                        <button type="button" title="Connectez-vous avant d\'jouter ce produit à la liste des favoris" class="btn btn-default disabled mt-auto noConnect"><i class="fa fa-heart-o"></i></button>
                        '); ?>
                      </p>
                    </form>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs mt-auto" style="margin-top: -20px;">
                    <button class="owl-thumb-item"><img src="img/<?= $image ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/<?= $image ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/<?= $image ?>" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <h4>Détail Produit</h4>
                <p><?= $description ?></p>
                
                <blockquote class="blockquote">
                  <p class="mb-0"><em>Votre choix c'est notre priorité, ajouter vos produits à votre liste des favoris pour bénéficier des nos arrivages; <b><?= $entreprise['nom'] ?></b> c'est votre maison</em></p>
                </blockquote>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-small">
                    <h3>Vous aimez aussi ces produits ?</h3>
                  </div>
                </div>
                <div class="col-lg-9 col-md-12">
                  <div class="row">
                    <?php 
                      if ($other_products > 0) {
                    foreach($other_products as $row): ?>
                      <div class="col-lg-4 col-md-8">
                        <div class="product">
                          <div class="image"><a href="shop-detail.php?p=<?= $row['id']?>"><img src="img/<?= $row['image']?>" alt="" class="img-fluid image1"></a></div>
                          <div class="text">
                            <h3 class="h5"><a href="shop-detail.php?p=<?= $row['id']?>"><?= $row['designation']?></a></h3>
                            <p class="price"><?= $row['prix']?> $</p>
                          </div>
                        </div>
                      </div>
                    <?php
                        endforeach;
                      }
                    ?>
                  </div>
                </div>
                
              </div>
              
            </div>
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title">Catégories</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-laptop"></i><span class="d-none d-md-inline-block">Produits</span></a>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <?php foreach($all_categories as $row): ?>
                    <li class="nav-item"><a href="#" value="<?php echo $row['id'] ?>" class="nav-link  d-flex align-items-center justify-content-between btnCat"><span><?php echo $row['libelle'] ?> </span>
                      <?php 
                        $tot = $model->getProductCategory($row['id']);

                        foreach($tot as $cat):

                      ?>
                      <span class="badge badge-secondary"><?php echo $cat['tot_prod'] ?></span></a>

                    <?php endforeach; ?>
                      
                    </li>
                  <?php endforeach;?>
                    
                  </ul>
                </div>
              </div>
              
              <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title"><?= $entreprise['nom']?></h3>
              </div>
              <div class="banner"><a href="shop-category.html"><img src="img/New_Center.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
          </div>
        </div>
      </div>
      <?php require_once('footer/footer.php') ?>
    </div>
    <!-- Javascript files-->
    <script>
       //Ajout du produit dans le panier
      $(document).ready(function(){
        $(document).on("click",".addItemBtn", function(e){
          e.preventDefault();

          var $form = $(this).closest(".form-submit");
          var id = $form.find(".id").val();
          var designation = $form.find(".designation").val();
          var prix = $form.find(".prix").val();
          var image = $form.find(".image").val();

          $.ajax({
            url: 'action.php',
            type: 'post',
            data: {id:id,designation:designation,prix:prix,image:image,},
            success: function(response){
              $("#message").html(response);
              window.scrollTo(0,0);
              count_items_in_cart();
            }
          });     
        });
      });
       //Ajout du produit aux favoris
      $(document).ready(function(){
        $(document).on("click",".btnFav", function(e){
          e.preventDefault();

          var $form = $(this).closest(".form-submit");
          var idP = $form.find(".id").val();
          var idC = $form.find(".idC").val();
          var action = 'add_fav';

          $.ajax({
            url: 'action.php',
            type: 'post',
            data: {idP:idP,idC:idC,action:action,},
            success: function(response){
              window.scrollTo(0,0);
              location.reload(true);
              count_items_in_cart();
            }
          });  
        });
      });
       //Suppression du produit aux favoris
      $(document).ready(function(){
        $(document).on("click",".btnFavSup", function(e){
          e.preventDefault();

          var $form = $(this).closest(".form-submit");
          var idF = $form.find(".idFav").val();
          var action = 'delete_fav';

          $.ajax({
            url: 'action.php',
            type: 'post',
            data: {idF:idF,action:action,},
            success: function(response){
              window.scrollTo(0,0);
              location.reload(true);
              count_items_in_cart();
            }
          });  
        });
      });
       //Suppression du produit aux favoris
      $(document).ready(function(){
        $(document).on("click",".noConnect", function(e){
          e.preventDefault();

          alert('Connectez-vous avant d\'jouter ce produit à la liste des favoris');
        });
      });

      count_items_in_cart();
      //Methode pour afficher tous les articles
      //Methode pour afficher le nombres des articles dans le panier
      function count_items_in_cart(){
        $.ajax({
          url:'action.php',
          type:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
            $(".cart-item").html(response);
            $("#cart-panier").html(response);
          }
        });
      }

    </script>
  </body>
</html>