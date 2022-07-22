<?php 

  $shop = 'active';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;
  $all_product = $model->getItems($ip);

  $item_count = $model->getItemCount($ip);

  $other_products = $model->getAllProductLimit(0,3);

?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">VOTRE PANIER </h1>
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
                <li class="breadcrumb-item active">Votre Panier</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
              <div style="display: <?php if (isset($_SESSION['showAlert'])) {
                $_SESSION['showAlert'];
              }else{echo "none";} unset($_SESSION['showAlert']) ?>" class="alert alert-success alert-dismissible" id="msg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6><?php if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
              } unset($_SESSION['showAlert']); ?></h6>
              </div> 
              <p class="text-muted lead">Vous avez actuellement <b>(<span class="cart-item"></span>)</b> articles dans votre panier.</p> <i id="cart-panier"></i>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="get" action="shop-checkout1.html">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="">Produit</th>
                          <th colspan="3"></th>
                          <th>Quantité</th>
                          <th>Prix</th>
                          <th >Total</th>

                          <th><a href="action.php?clear" class="btn btn-danger btn-sm " onclick="return confirm('Voulez-vous vider ce panier ? ')"><i class="fa fa-trash-o text-white"></i> Vider</a></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $total =0;  

                          if ($all_product > 0) {
                            foreach($all_product as $res):
                          
                        ?>
                        <tr>
                          <td><a href="#"><img src="img/<?= $res['img_produit'];?>" alt="White Blouse Armani" class="img-fluid"></a></td>
                          <td colspan="2"><a href="shop-detail.php?p=<?= $res['id_produit'];?>"><?= $res['nom_produit'];?></a>
                            <input type="hidden" class="id_product" value="<?php echo $res['id'] ?>" name="">
                          </td>
                          <td></td>

                          <td>
                            <input type="number" min="1" value="<?= $res['qte_produit'];?>" class="form-control itmQt">
                          </td>
                          <td><?= number_format($res['prix_produit'],2);?> $
                            <input type="hidden" class="prix_produit" value="<?php echo $res['prix_produit'] ?>" name="">
                          </td>
                          <td ><?= number_format($res['prix_tot'],2);?> $</td>
                          <td><a href="action.php?remove=<?= $res['id'] ?>" onclick="return confirm('Voulez-vous supprimer cet article de votre panier ? ')"><i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <?php  $total += $res['prix_tot'];  ?>
                      <?php endforeach; } ?>
                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2"><?php echo number_format($total,2); ?> $</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="shop.php" class="btn btn-info mt-0"><i class="fa fa-chevron-left"></i> Continuer l'achat <i class="fa fa-cart-plus"></i></a></div>
                    <div class="right-col">
                      <button class="btn btn-secondary"><i class="fa fa-refresh"></i> Actualiser le panier</button>
                      <button type="button" value="<?php echo $id ?>"  class="btn btn-primary testLog <?php echo (($total > 0 && !empty($id))?'':'disabled'); ?>" title=""><i class="fa fa-credit-card"></i> Proceder au paiement <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-2">
                    <h3>Vous pouvez appreciez aussi ces produits</h3>
                  </div>
                </div>
                <?php 
                  if ($other_products > 0) {
                    foreach($other_products as $row): ?>
                      <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3">
              <div id="order-summary" class="box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Récaputilatif de la commande</h3>
                </div>
                <p class="text-muted">L'expédition et les frais sont calculés en fonction des valeurs que vous avez saisies.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Total Commande</td>
                        <th><?php echo number_format($total,2); ?> $</th>
                      </tr>
                      <tr>
                        <td>Frais de livraison</td>
                        <th>00.00 $</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th><?php echo number_format($total,2); ?> $</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h4>Code Promo</h4>
                </div>
                <p class="text-muted">Si vous avez un code propo, vueillez le saisir dans cette case</p>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-template-main"><i class="fa fa-gift"></i></button></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- FOOTER -->
      <?php include_once('footer/footer.php'); ?>
    </div>

    <script>

      //Ajout du produit dans le panier
      $(document).ready(function(){
        $(".addItemBtn").click(function(e){
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
            },
          });     

        });
      });

      count_items_in_cart()

      //Methode pour afficher le nombres des articles dans le panier
      function count_items_in_cart(){
        $.ajax({
          url:'action.php',
          type:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
            $(".cart-item").html(response);
          }
        });
      }

      //Actualiser le prix total apès changement de la quantité
      $(".itmQt").on("change", function(){

        var $element = $(this).closest("tr");

        var id_produit = $element.find('.id_product').val();
        var prix_produit = $element.find('.prix_produit').val();
        var qte = $element.find('.itmQt').val();

        console.log(qte);

        $.ajax({
          url:'action.php',
          type:'post',
          cache:false,
          data:{id_produit:id_produit,prix_produit:prix_produit,qte:qte},
          success:function(response){
            location.reload(true);
            console.log(response);
          }
        });

      });

      //Teser si l'utilisateur est connecté avent de passer au processus de paiement
      $(".testLog").on("click", function(){

        var $session = $(".testLog").val();

        if ($session.length > 0) {

          window.location.href="checkout.php";

        }else{
          alert("Vous devez d'abord fournir quelques information pour la livraison s'il vous plait !");
        }

        
      });
     
      
    </script>
  </body>
</html>