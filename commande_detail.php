<?php 

  $shop = 'activem';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idVente = $_GET['id'];
    $all_ventes = $model->getSingleVentesClient($id,$idVente);
    $entreprise_info = $model->getEntrepriseInfo();
  }else{
    header('Location:shop');
  }
  
  if (empty($id) && $type != "Client") {
    header('Location:index');
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

      <?php 
        if ($all_ventes > 0) {
          foreach($all_ventes as $data):
            $idCom = $data['id'];
            $nom = $data['nom'];
            $adresse = $data['adresse'];
            $telephone = $data['phone'];
            $etat = $data['livraison'];
            $date = $data['date_vente'];
          endforeach;
        } 
        if ($entreprise_info > 0) {
          foreach($entreprise_info as $row):
            $nom_entreprise = $row['nom'];
            $adresse_entreprise = $row['adresse'];
          endforeach;
        }
      ?>
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Commande # <?= $idCom ?></h1>
            </div>
            <div class="col-md-5 cache">
              <ul class="breadcrumb d-flex justify-content-end ">
                <li class="breadcrumb-item"><a href="client_espace">Accueil</a></li>
                <li class="breadcrumb-item "><a href="client_espace">Mes Commandes</a></li>
                <li class="breadcrumb-item active">Commande # <?= $idCom ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar mb-0">
            <div class="col-md-3 mt-4 mt-md-0 cache">
              <!-- CUSTOMER MENU -->
              <div class="panel panel-default sidebar-menu ">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Sections Client</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="customer-orders.html" class="nav-link active"><i class="fa fa-list"></i> Mes Commandes</a></li>
                    <li class="nav-item"><a href="customer-account.html" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-heart"></i> Mes Produits Préferés</a></li>
                    <li class="nav-item"><a href="deconnexion" class="nav-link"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="customer-orders" class="col-md-9 mt-0" >
              
              <div class="row ">
            <div id="customer-order" class="col-lg-12">
              <p style="margin-bottom: 0px;" class="lead">Progression de la Commande #<?= $idCom ?> envoyée <strong><?= $date ?></strong>.</p>
              <?php 
                if ($etat == "encours") { ?>
                  <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;">Commande en cours de traitement </div>
                  </div>
                <?php }else if ($etat == "accepte") { ?>
                  <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;">Commande Acceptée </div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;">En cours de livraison</div>
                  </div>
                <?php }else if ($etat == "livre"){?>
                  <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;">Commande Acceptée </div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;">En cours de livraison</div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%;">Produit(s) livré(s)</div>
                  </div>
                <?php }else if ($etat == "annule"){?>
                  <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;">Cette commande a été annulée</div>
                  </div>
                <?php }
              ?>
              
              <p class="lead text-muted">Si vous avez des question, vueillez <a href="contact.php">nous contacter</a>, votres ervice d'assistance est disponible 24/7.</p>
              <div class="box" style="margin-top: -20px;">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="border-top-0">Produit(s)</th>
                        <th class="border-top-0">Date Vente</th>
                        <th class="border-top-0">Prix </th>
                        <th class="border-top-0">Remise</th>
                        <th class="border-top-0" class="text-right" colspan="2">Prix Total</th>
                        <th class="border-top-0" class="text-right"></th>
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
                              <td><?= number_format($res['remise'],2); ?> $</td>
                              <?php $tot = $res['prix_total'] - $res['remise']; ?>
                              <td colspan="2"><?= number_format($tot ,2); ?> $</td>
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
                    <?php 
                      $cout_liv = 0;
                      $taux = 16/100;
                      $tax = $tot*$taux;
                      $sous_tot = $tot - $tax;
                      $netPaye = ($cout_liv + $tax + $sous_tot);
                    ?>
                    <tfoot>
                      <tr>
                        <th colspan="5" class="text-right">Sous-total Commande</th>
                        <th><?= number_format($sous_tot ,2); ?> $</th>
                      </tr>
                      <tr>
                        <th colspan="5" class="text-right">Coût de livraison</th>
                        <th><?= number_format($cout_liv ,2); ?> $</th>
                      </tr>
                      <tr>
                        <th colspan="5" class="text-right">Tax</th>
                        <th colspan="2"><?= number_format($tax ,2); ?> $</th>
                      </tr>
                      <tr>
                        <th colspan="5" class="text-right">Total</th>
                        <th colspan="2"><b><?= number_format($netPaye ,2); ?> $</b></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="row addresses">
                  <div class="col-md-6 text-right">
                    <h3 class="text-uppercase">Adresse de facturation</h3>
                    <p><?= $nom_entreprise ?><br>  <?= $adresse_entreprise ?></p>
                  </div>
                  <div class="col-md-6 text-right">
                    <h3 class="text-uppercase">Adresse de Livraison</h3>
                    <p><?= $nom ?><br> <?= $telephone ?><br> <?= $adresse ?><br></p>
                  </div>
                </div>
                <div class="float-right cache" >
                  <button class="print btn btn-primary btn-md ">Imprimer la commande</button>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div><!-- FOOTER -->
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
      $('.print').on('click',function(){
        $(".cache").hide();
        window.print();
        if(!window.print()){  
          $('.cache').show();

        }
      });
    </script>
  </body>
</html>