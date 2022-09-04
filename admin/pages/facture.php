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
          <div class="col-md-12 text-center" style="border: 2px solid; border-radius: 10px;">
            <p style="font-weight:bold; font-family:Century Gothic; font-size:1em;" >
                  Id.Nat : 01-83-N19972W / N° RCCM : CD/KIN/RCCM/17-B-00575<br>Tél : (+243) 974 473 790
                <span><br>
                  E-mail :  <a href="#" style="text-decoration:underline">newtechnologycenter@newtech.com</a> 
                </span><br>
                <span class="">Site : www.newtech.com</span><br>Adresse : Q. Ibanda/Ndendere, Avenue Kibombo, Bukavu – Sud-Kivu/ RDC
                <span style=""></span>
              </p>
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
    
