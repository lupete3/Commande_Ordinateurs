<?php 

  $shop = 'activem';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  $all_ventes = $model->getAllVentesClient($id);
  
  if (empty($id) && $type != "Client") {
    header('Location:index.php');
  }else

?>
    <!-- Top bar end-->
      <!-- Login Modal-->
      <div id="paie-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Confirmation Paiement </h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="confirm-form">
                <span id="etat"></span>
                <div class="form-group">
                  <input id="id_com" name="id_com" class="id_com" type="hidden" placeholder="ID" class="form-control">
                  <label for=""> <i class="fa fa-info-circle"></i> Entrez le numéro de transaction se trouvant dans le message de transaction de l'argent que vous avez effectué</label>
                  <input id="email_modal" type="text" name="code" placeholder="Ex: PP220519.1113.B85891" class="form-control code">
                </div>
                <p class="text-center">
                  <button type="button" id="btnConf" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Confirmer</button>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Mes commandes</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="client_espace.php">Accueil</a></li>
                <li class="breadcrumb-item active">Mes Commandes</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar mb-0">
            <?php require_once('include/nav.php'); ?>
            <div id="customer-orders" class="col-md-9">
              
              <div class="box mt-0 mb-lg-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Produit(s)</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <form action="" id="valid-paie" method="get" accept-charset="utf-8">
                                             
                      <?php 
                        if ($all_ventes > 0) {
                          foreach($all_ventes as $res): ?>
                            <tr>
                              <th><?= $res['produits']; ?></th>
                              <td><?= $res['date_vente']; ?></td>
                              <td><?= number_format($res['prix_total'],2); ?> $</td>
                              <td>
                                <?php 
                                  if ($res['livraison'] == "encours") {
                                    echo '<span class="badge badge-info">Commande encours <br> de préparation</span>';
                                  }else 
                                  if ($res['livraison'] == "livre") {
                                    echo '<span class="badge badge-success">Commande livré</span>';
                                  }else 
                                  if ($res['livraison'] == "accepte") {
                                    echo '<span class="badge badge-warning">Commande <br> encours de livraison</span>';
                                  }else 
                                  if ($res['livraison'] == "annule") {
                                    echo '<span class="badge badge-danger">Votre commande <br> a été annulée</span>';
                                  }
                                ?>
                              </td>
                              <td><?php echo($res['paye_mode'] == "Mobile Money" && $res['livraison'] != "annule" && $res['livraison'] != "livre")?'<a href="#" value="'.$res['id'].'" class="paie badge badge-warning">Confirmer votre <br> Paiement</a>':'' ?><a href="#" value="<?= $res['id'] ?>" class="btn btn-template-outlined btn-sm btnDetail">Voir</a></td>
                            </tr>
                          <?php endforeach;
                        }else{
                          echo "<tr>
                                  <td colspan='4' rowspan='' headers=''>
                                    <center><h2>Aucune donnée trouvée</h2>
                                  </td>
                                </tr>";
                        }
                      ?>
                       </form>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <!-- FOOTER -->
      <?php include_once('footer/footer.php'); ?>
    </div>

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

      $("#paie-modal").hide();
      $(".paie").on("click",function(){
        var $form = $(this).closest("#valid-paie");
        var id = $(this).attr("value");

        $("#paie-modal").modal("show");
        $("#id_com").val(id)
        
      });

      $("#btnConf").on("click", function(){

        var $form = $(this).closest("#confirm-form");
        var id_conf = $form.find(".id_com").val();
        var code = $form.find(".code").val();

        $.ajax({
          type:"post",
          url:"actions_client.php",
          data:{
            id_conf:id_conf,code:code
          },
          success:function(response){
            $("#etat").html(response);

          }
        });

      });

      $(".btnDetail").on("click", function(){

        var $form = $(this).closest("#valid-paie");
        var id = $(this).attr("value");

        window.location.href="commande_detail.php?id="+id;

      });
    </script>
  </body>
</html>