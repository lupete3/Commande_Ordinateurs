<?php 

  $shop = 'active';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');
  include_once('panier.php');

  $model = new Model;
  $all_product_items = obtenirContenuPanier();

  $prix_tot = 0;
  $allItems = '';
  $items = array();

  foreach ($all_product_items as $index => $res) {
    $prix_tot += $res['tot'];
    $items[] = $res['designation'].'('.$res['qte'].')';
  }

  $allItems = implode(', ', $items);

?>

<div class="container justify-content-center">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-2 text-center " id="order"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-2 text-center mt-4">
        <a href="shop" class="btn btn-sm btn-info mt-0"><i class="fa fa-chevron-left"></i> Continuer l'achat <i class="fa fa-cart-plus"></i></a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-2 text-center mt-4" id="info">
       
      <h3 class="text-primary">Compléter vos informations</h3>
      <div class="jumbotron p-1 mb-2 text-center">
        <p><b>Vos articles : </b> <?php echo $allItems; ?><br>
        Coût de livraison : <b>Gratuit</b><br>
        Total à payer : <b><?php echo number_format($prix_tot, 2); ?>$</b></p>
      </div>

      <form action="" method="post" id="placeOrder">
        <input type="hidden" name="items" class="form-control" value="<?php echo $allItems ?>">
        <input type="hidden" name="prix_tot" class="form-control" value="<?php echo $prix_tot ?>">
        <label class="float-left" for=""><b>Nom</b></label>
        <input type="hidden" name="idCli" class="form-control" value="<?php echo $id ?>" placeholder="ID">
        <input type="text" name="name" class="form-control" value="<?php echo $username ?>" placeholder="Entrer votre nom">
        <label class="float-left" for=""><b>Email</b></label>
        <input type="text" name="email" class="form-control" value="<?php echo ($email)?$email:'' ?>" placeholder="Entrere votre Email">
        <label class="float-left" for=""><b>Téléphone</b></label>
        <input type="text" name="tel" class="form-control" value="<?php echo $telephone ?>" placeholder="Entrer votre numéro de téléphone">
        <label class="float-left" for=""><b>Adresse de livraison</b></label>
        <textarea name="adresse" class="form-control" rows="3"><?php echo $avenue.' '.$quartier.' '.$commune.' '.$ville ?></textarea><br>
        <h6 class="float-left">Choisir le mode de paiement</h6>
        <div class="form-group">
          <select name="mode_paie" class="form-control mode">
            <option value="Livraison">A la livraison</option>
            <option value="Mobile Money">Mobile Money</option>
          </select>
        </div>
        <span id="num_mobile">Envoyer de l'argent à ce numéro <b>0987654321</b> <br> NB : Après envoi, venez compléter le numéro de transaction dans votre espace <br> </span>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="" value="Envoyer la demande">
        </div>
      </form>
      </div>
    </div>
</div>



    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>

    <script>

      //Ajout du produit dans le panier
      $(document).ready(function(){

        $("#num_mobile").hide();

        $("#placeOrder").submit(function(e){
          e.preventDefault();

          $.ajax({
            url:'action_cart.php',
            type:'post',
            data:$("form").serialize()+"&action=order",
            success:function(response){
              window.scrollTo(0,0);
              count_items_in_cart();
              $("#info").hide();
              $("#order").html(response);
            }
          });
        });

      });

      count_items_in_cart();

      //Methode pour afficher le nombres des articles dans le panier
      function count_items_in_cart(){
        $.ajax({
          url:'action_cart.php',
          type:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
            $(".cart-item").html(response);
            $("#cart-panier").html(response);
          }
        });
      }

      //Afficher et cacher le numéro de paiement mobile money
      $(".mode").on("change", function(){

        var $form = $(this).closest("#placeOrder");
        var type = $form.find(".mode").val();

        if (type == "Mobile Money") {
           $("#num_mobile").show();
        }else{
           $("#num_mobile").hide();
        }
        

      });
     
      
    </script>

