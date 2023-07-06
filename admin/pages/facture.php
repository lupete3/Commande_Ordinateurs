<?php 

  require_once '../model/Model.php';
  $title = 'Facture Client';
  require_once('include/headerAdmin.php'); 

  $model = new Model;

  $list_ventes = $model->getVenteAdminSingle($_GET['id']);

  if ($list_ventes) {
    foreach($list_ventes as $res){ ?>

      <div class="container " style="margin-bottom: 100px;">
        <div class="row">
          <div class="col-md-2">
            <img src="img/Logo NTC.png" style="width: 100%">
          </div>
          <div class="col-md-8  text-center" style="border-bottom: 3px solid">
            <h3>Mson NEW TECHNOLOGY CENTER<br>Chez FRANCK</h3>
              <p style="font-weight:bold; font-family:Century Gothic; font-size:1em;">Ventes des ordinateurs, accéssoires et services informatiques<br> C.Ibanda, Q. Ndendere, Av. Kibombo N°49
              N° RCCM : CD/BKV/RCCM/20-A-00194<br>
              Téléphone : +243 974 473 790<br>
              Newtechnologycenter202@gmail.com
              </p>
          </div>
          <div  class="col-md-2">
            <img src="img/Logo NTC.png" style="width: 100%">
          </div>
            <h1 class="text-center">FACTURE</h1>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered " width="100%" style="font-size: 20px;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Client</th>
                      <th>Prix Achat</th>
                      <th>Qte Achetée</th>
                      <th>Prix Total</th>
                      <th>Date Vente</th>
                      <th>Produit</th>
                    </tr>
                  </thead>
                  
                  <tbody >
                    <tr style="font-size: 20px;">
                      <td><?php echo $res['client'] ?></td>
                      <td><?php echo number_format($res['prix'],2) ?> $</td>
                      <td><?php echo $res['quantite'] ?></td>
                      <td><?php echo number_format(($res['prix'] * $res['quantite']),2) ?> $</td>
                      <td><?php echo date('d-m-Y', strtotime($res['date_vente'])) ?></td>
                      <td><?php echo $res['designation'] ?></td>
                    </tr>
                  </tbody>
                </table>            
              </div>
            </div>  
            
            <button type="button"class="print cache btn btn-dark"> <i class="fa fa-print"></i>Imprimer</button><br>
          </div>
          <img src="img/CACHER.jpg" style="width: 20%">
        </div>

      </div><br>
                               
    <?php  
    } 
  }else{
    echo'
      <tr>
        <td colspan="4" class="text-center" headers="">
          <h3>Aucune donné trouvée !</h3>
        </td>
      </tr>
    ';
  }

  ?>

<?php include('include/footer.php'); ?>
  <script>
    $('.print').on('click',function(){
      $(".cache").hide();
      window.print();
      if(!window.print()){  
        $('.cache').show();
      }
    });
  </script>
    
