
      <footer class="main-footer cache">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">A Propos de nous</h4>
              <p>Meilleur entreprise qui vous fournis des produits de qualité dans la ville de Bukavu avec des offres spécialement pour vous</p>
              <hr>
              <h4 class="h6">Recevez nos Newsletter</h4>
              <div id="message"></div>
              <form class="form-news">
                <div class="input-group">
                  <input type="email" class="form-control email" required>
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary addSub"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Blog</h4>
              <ul class="list-unstyled footer-blog-list">
                <?php 
                  //Appel des articles de blog 
                  $all_blog = $model->getBlog($debut = 0, $fin = 3);
                  if ($all_blog > 0) {
                    foreach($all_blog as $res):
                    
                ?>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/<?= $res['image'] ?>" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="blog_detail.php?a=<?= $res['id'] ?>"><?= $res['titre'] ?></a></h5>
                  </div>
                </li>
                <?php endforeach; } ?>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong> <?php echo $entreprise['nom']?></strong><br> <?= $entreprise['adresse']?></p><a href="contact.php" class="btn btn-template-main">Aller à la page de contact</a>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <ul class="list-inline photo-stream">
              <?php 
                  //Appel des articles de blog 
                  $data_product = $model->getAllProductLimit(0,6);
                  if ($data_product > 0) {
                    foreach($data_product as $res):
                ?>
                <li class="list-inline-item"><a href="shop-detail.php?p=<?= $res['id'] ?>"><img src="img/<?= $res['image'] ?>" alt="..." class="img-fluid"></a></li>
                <?php endforeach; } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; <?php echo date('Y') ?>. <?= $entreprise['nom']?></p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Développé par <a href="https://pdevtuto.com">PdevTuto </a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>

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
      //Ajout souscription aux newslater
      $(document).ready(function(){
        $(".addSub").click(function(e){
          e.preventDefault();

          let $form = $(this).closest(".form-news");
          let email = $form.find(".email").val();
          let action = "add_newsletter"

          $.ajax({
            url: 'action.php',
            type: 'post',
            data: {email:email,action:action,},
            success: function(response){
              $("#message").html(response);
            },
          }); 

        });
      });
    </script>