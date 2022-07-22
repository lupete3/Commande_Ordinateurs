<?php 

  $shop = 'activem';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  $all_data = $model->getAllProductFavoris($id);
  
  if (empty($id) && $type != "Client") {
    header('Location:index.php');
  }else

?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Mes Produits Préférés</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="client_espace.php">Accueil</a></li>
                <li class="breadcrumb-item active">Mes Produits Préférés</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-9">
              <p class="lead">Continuez à ajouter des produits sur votre liste des favoris pour les commander sans peine.</p>
              <div class="row products">
                <?php if ($all_data > 0):
                  foreach ($all_data as $data) { ?>
                    <div class="col-lg-3 col-md-4">
                      <div class="product">
                        <div class="image"><a href="shop-detail.php?p=<?= $data['id'] ?>"><img src="img/<?= $data['image'] ?>" alt="" class="img-fluid image1"></a></div>
                        <div class="text">
                          <h3 class="h5"><a href="shop-detail.php"><?= $data['designation'] ?></a></h3>
                          <p class="price"><?= number_format($data['id'],2) ?> $</p>
                        </div>
                      </div>
                    </div>
                <?php } endif ?>
              </div>
            </div>
            <?php require_once('include/nav.php'); ?>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <?php require_once('footer/footer.php') ?>
    </div>
    <!-- Javascript files-->
    <script>
      count_items_in_cart();

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