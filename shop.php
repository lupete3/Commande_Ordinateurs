<?php 

  $shop = 'active';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  $all_categories = $model->getCategory();

?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2 cat">Découvrez tous nos articles </h1>
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
                <li class="breadcrumb-item active">Notre Shop</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
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
            <div class="col-md-9">
              <h2 class="text-center text-capitalize" >Produits Populaires</h2>

              <hr>
              <!-- Affichage du message si un produit est ajouté au panier -->
              <div id="message">
                
              </div>
              <div id="data_product">
                
              </div>
        
              
            </div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <?php include_once('footer/footer.php'); ?>
    </div>

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
  
      //Afficher les articles selon le critère de recherche
      $("#btnSearch").click(function(e){
          e.preventDefault();

          var $form = $(this).closest("#formSearc");
          var text = $form.find("#searc").val();

          $.ajax({
            url: 'data_products.php',
            type: 'get',
            data: {text:text},
            success: function(response){
              $("#data_product").html(response);
              window.scrollTo(0,0);
              count_items_in_cart();
            }
          });     

        });

        //Afficher les articles selonla catégorie le critère de recherche
      $(".btnCat").click(function(e){
          e.preventDefault();

          var id_cat = $(this).attr("value");

          $.ajax({
            url: 'data_products.php',
            type: 'get',
            data: {id_cat:id_cat},
            success: function(response){
              $("#data_product").html(response);
              window.scrollTo(0,0);
              count_items_in_cart();
            }
          }); 

        });

      count_items_in_cart();

      get_all_products();

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

      //Methode pour afficher tous les articles
      function get_all_products(){

        $.ajax({
          url:'data_products.php',
          type:'post',
          data:{dataProduct:"data_products"},
          success:function(response){
            $("#data_product").html(response);
            //$("#cart-panier").html(response);
          }
        });
      }

      
      $(document).on("click",".page-link", function(e){
          e.preventDefault();

        var id = $(this).attr("value");
        var pageCourante = 0;
        var articleparPage = 6;

        if(id.length >= 0){
           pageCourante = id;
        }else{
          pageCourante = 1;
        }

        if(id == 0){
          var depart = 0;
        }else{
          var depart = (pageCourante - 1) * articleparPage;
        }

        $.ajax({
          url:'data_products.php',
          type:'get',
          data:{depart:depart, pageCourante : articleparPage},
          success:function(response){
            $("#data_product").html(response);
            window.scrollTo(-0,1);
            //$("#cart-panier").html(response);
          }
        });

      });
     
      
    </script>
  </body>
</html>