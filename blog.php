<?php 

$blog = 'active';

// Importation de la classe Model
include_once('admin/model/Model.php');

require_once('include/header.php');

$model = new Model;

//Appel des articles de blog 
$all_blog = $model->getBlog($debut = 0, $fin = 100);

?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Nos Articles de Blog</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Blog Listing: Small</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div id="blog-listing-small" class="col-lg-12">
              <div class="row">
              <?php if (!empty($all_blog)) {
                foreach ($all_blog as $res): ?>
                <div class="col-lg-4 col-md-6">
                  <div class="home-blog-post">
                    <div class="image"><img src="img/<?= $res['image']?>" alt="..." class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="blog_detail.php?a=<?= $res['id']?>" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                    </div>
                    <div class="text">
                      <h4><a href="blog_detail.php?a=<?= $res['id']?>"><?= $res['titre']?> </a></h4>
                      <p class="author-category">By <a href="blog_detail.php?a=<?= $res['id']?>">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                      <p class="intro"><?= $res['detail']?></p><a href="blog_detail.php?a=<?= $res['id']?>" class="btn btn-template-outlined">Continuez la lecture</a>
                    </div>
                  </div>
                </div>
                <?php endforeach; } ?>
              </div>
              </div>
              <ul class="pager list-unstyled d-flex align-items-center justify-content-between">
                <li class="previous"><a href="#" class="btn btn-template-outlined">← Older</a></li>
                <li class="next disabled"><a href="#" class="btn btn-template-outlined">Newer →</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- FOOTER -->
      <?php include_once('footer/footer.php'); ?>
    </div>
    
  </body>
</html>
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