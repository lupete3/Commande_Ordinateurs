<?php 

$blog = 'active';

// Importation de la classe Model
include_once('admin/model/Model.php');

require_once('include/header.php');

$model = new Model;

if (empty($_GET['a'])) {
    header('location:index');
}else{
  //Appel des articles de blog 
  $all_blog = $model->getBlog($debut = 0, $fin = 4);

  // Appel d'un seul article de blog
  $single_blog = $model->getBlogSingle($_GET['a']);

  if ($single_blog > 0) {
    foreach($single_blog as $res):
        $auteur = $res['nom_complet'];
        $titre = $res['titre'];
        $detail = $res['detail'];
        $image = $res['image'];
        $description = $res['description'];
        $date_pub = $res['date_pub'];
    endforeach;
  }
}

?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2 text-uppercase">détail Article</h1>
            </div>
            <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
                <?php echo ((!empty($username))?
                '
                  <li class="breadcrumb-item"><a href="client_espace">Mon Espace</a></li>
                ':
                '
                  <li class="breadcrumb-item"><a href="blog">Blog</a></li>
                '); ?>
                <li class="breadcrumb-item active">Notre Blog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div id="blog-post" class="col-md-9">
              <p class="text-muted text-uppercase mb-small text-right text-sm">Par <a href="#"><?= $auteur ?></a> |  <?= $date_pub ?></p>
              <p class="h1"><?= $titre ?></p>
              <p class="lead"><?= $detail ?></p>
              <div id="post-content">
                
                <?= $description ?>

              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Articles Récents</h3>
                </div>
                <?php if (!empty($all_blog)) {
                    foreach ($all_blog as $res): ?>
                    <div class="home-blog-post">
                        <div class="image"><img src="img/<?= $res['image']?>" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="blog_detail?a=<?= $res['id']?>" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Lire Plus</a></div>
                        </div>
                        <div class="text">
                        <h4><a href="blog_detail?a=<?= $res['id']?>"><?= $res['titre']?> </a></h4>
                        <p class="author-category">Par <a href="blog_detail?a=<?= $res['id']?>"><?= $res['nom_complet']?></a> dans <a href="blog">Astuces</a></p>
                        </div>
                    </div>
                    <?php endforeach; } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Prêt à vous lancer ?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">  <a href="shop" class="btn btn-template-outlined-white">Visitez notre shop maintenant</a></div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <!-- FOOTER -->
      <?php require_once('footer/footer.php') ?>
    </div>
    <!-- Javascript files-->
    
  </body>
</html>
<script>
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
</script>