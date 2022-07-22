<?php 

  session_start();
  
  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  $all_product = $model->getAllProduct(); 

  //Delimiter le nombre des articles à afficher par page
  $articleparPage = 6;

  foreach($all_product as $data):
    $totalArticles = $data['tot_prod'];
  endforeach;

  $pagesTotales = ceil($totalArticles / $articleparPage);

  $data_product = null;

  if (isset($_GET['text']) AND !empty($_GET['text'])) {
    $text = $_GET['text'];
    $data_product = $model->getProductSearch($text,$type="text");
  }
  if (isset($_GET['id_cat']) AND !empty($_GET['id_cat'])) {
    $id_cat = $_GET['id_cat'];
    $data_product = $model->getProductSearch($id_cat,$type="cat");
  }

  if ($data_product) {
   

  ?> 

  <div class="row products products-big">
  <?php 
    if (!empty($data_product)) { 
      foreach($data_product as $res) : ?>
      <div class="col-lg-4 col-md-6 mb-2">
        <div class="product ">
          <div class="image"><a href="shop-detail.php=<?= $res['id'] ?>"><img src="img/<?php echo $res['image'] ?>"  alt="" class="img-fluid rounded image1"></a></div>
            <div class="text">
              <h3 class="h5" style=" margin-top: -40px;"><a href="shop-detail.html"><?php echo $res['designation'] ?></a></h3>
              <p class="price text-danger" style="font-size: 30px; margin-top: -20px;"><b><?php echo number_format($res['prix'],2) ?>$</b></p>
              <form action="" class="form-submit">
                <input type="hidden" class="id" value="<?= $res['id'] ?>" name="">
                <input type="hidden" class="designation" value="<?= $res['designation'] ?>" name="">
                <input type="hidden" class="prix" value="<?= $res['prix'] ?>" name="">
                <input type="hidden" class="image" value="<?= $res['image'] ?>" name="">
                <button type="submit" class="btn btn-md  btn-primary addItemBtn"><i class="fa fa-cart-plus"></i> Ajouter au panier</button>
              </form>
            </div>
            <?php 
              $dt = date("Y-m-d");
              $e1 = new DateTime($res['date_ajout']);
              $e2 = new DateTime($dt);

              $dif = $e1->diff($e2);

              if (format_interval($dif) <= 10) {
                echo '<div class="ribbon new">Nouveau</div>';
              }
            ?>
          </div>
        </div>
    <?php 
      endforeach; 
    }else{
      echo '<div class="pages">
        <h2 class="text-center text-capitalize" >Aucun article correspod à votre recherche </h2>
        <p class="loadMore text-center"><a href="#" class="btn btn-info"><i class="fa fa-refresh"></i> Actualiser</a></p>
      </div>';
    }              
  ?>
  </div>

  <?php 
  }else{

    if (isset($_GET['depart']) && isset($_GET['pageCourante'])) {
      $depart = $_GET['depart'];
      $pageCourante = $_GET['pageCourante'];
      $data_product = $model->getAllProductLimit($depart,$pageCourante);
    }else{
      $pageCourante = 1;
      $data_product = $model->getAllProductLimit(0,6);
    }
  ?>
  <div class="row products products-big">
    <?php 
      if (!empty($data_product)) { 
        foreach($data_product as $res) :
      ?>
      <div class="col-lg-4 col-md-6 mb-2">
        <div class="product ">
          <div class="image"><a href="shop-detail.php?p=<?= $res['id'] ?>" ><img src="img/<?php echo $res['image'] ?>"  alt="" class="img-fluid rounded image1"></a></div>
            <div class="text">
              <h3 class="h5" style=" margin-top: -40px;"><a href="shop-detail.html"><?php echo $res['designation'] ?></a></h3>
              <p class="price text-danger" style="font-size: 30px; margin-top: -20px;"><b><?php echo number_format($res['prix'],2) ?>$</b></p>
              <form action="" class="form-submit">
                <input type="hidden" class="id" value="<?= $res['id'] ?>" name="">
                <input type="hidden" class="designation" value="<?= $res['designation'] ?>" name="">
                <input type="hidden" class="prix" value="<?= $res['prix'] ?>" name="">
                <input type="hidden" class="image" value="<?= $res['image'] ?>" name="">
                <button type="submit" class="btn btn-md  btn-primary addItemBtn"><i class="fa fa-cart-plus"></i> Ajouter au panier</button>
              </form>

            </div>
            <?php 
              $dt = date("Y-m-d");
              $e1 = new DateTime($res['date_ajout']);
              $e2 = new DateTime($dt);

              $dif = $e1->diff($e2);

              if (format_interval($dif) <= 10) {
                echo '<div class="ribbon new">Nouveau</div>';
              }
            ?>
          </div>
        </div>
        <?php 
          endforeach; 
        }
        ?>
      </div>
    <?php 
    }

    function format_interval(DateInterval $interval){
      $result = "";
      If ($interval->d) {
        $result.= $interval->format("%d");
      }
      return $result;
    }

    if (isset($_GET['text'])|| isset($_GET['id_cat']) ) {
      // code...
    }else{ ?>

    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
      <ul class="pagination">
        <?php 
          $prec = $pageCourante - 1;
          $suiv = $pageCourante + 1;
          if ($suiv > $pagesTotales) {
            $suiv = $pageCourante;
          }
          echo '<li class="page-item"><a href="?page='.$prec.'" value="'.$prec.'" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>';

          for ($i=1; $i <= $pagesTotales; $i++) { 
            if ($i == $pageCourante) {
              $active = "active";
            }else{
              $active = "";
            }

            echo '<li class="page-item '.$active.' "><a class="page-link" value="'.$i.'" href="?page='.$i.'">'.$i.'</a></li>';
          }
            echo '<li class="page-item"><a href="?page='.$suiv.'" value="'.$suiv.'" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>';
        ?>
      </ul>
    </nav>
<?php } ?>

  

 