<?php 

  $index = 'active';

  require_once('include/header.php');

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  //Appel des images slide pour afficher la publicité
  $all_publicite = $model->getAllPublicites();

  //Appel des témoigages des clients 
  $all_temoigages = $model->getTemoignage();

  //Appel des articles de blog 
  $all_blog = $model->getBlog($debut = 0 ,$fin = 4);

?>

      <!-- Navbar End-->
      
      <section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
        <div class="container">
          <!-- Carousel Start-->
          <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
              <div class="homepage owl-carousel">
              <?php if (!empty($all_publicite)) {
                foreach ($all_publicite as $res): ?>
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <h1><?= $res['titre'] ?></h1>
                      <p><?= $res['detail'] ?></p>
                    </div>
                    <div class="col-md-7"><img src="img/<?= $res['image'] ?>" alt="" class="img-fluid"></div>
                  </div>
                </div>
              <?php endforeach; }else { ?>
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <p><img src="img/logo.png" alt="" class="ml-auto"></p>
                      <h1>Multipurpose responsive theme</h1>
                      <p>Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
                    </div>
                    <div class="col-md-7"><img src="img/template-homepage.png" alt="" class="img-fluid"></div>
                  </div>
                </div>  
                <div class="item">
                  <div class="row">
                    <div class="col-md-7 text-center"><img src="img/template-mac.png" alt="" class="img-fluid"></div>
                    <div class="col-md-5">
                      <h2>46 HTML pages full of features</h2>
                      <ul class="list-unstyled">
                        <li>Sliders and carousels</li>
                        <li>4 Header variations</li>
                        <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                        <li>+ 11 extra pages showing template features</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <h1>Design</h1>
                      <ul class="list-unstyled">
                        <li>Profiter des derniers solde de ce mois</li>
                        <li>Full width and boxed mode</li>
                        <li>Easily readable Roboto font and awesome icons</li>
                        <li>7 preprepared colour variations</li>
                      </ul>
                    </div>
                    <div class="col-md-7"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-7"><img src="img/template-easy-code.png" alt="" class="img-fluid"></div>
                    <div class="col-md-5">
                      <h1>Easy to customize</h1>
                      <ul class="list-unstyled">
                        <li>7 preprepared colour variations.</li>
                        <li>Easily to change fonts</li>
                      </ul>
                    </div>
                  </div>
                </div>    
              <?php } ?>
                
              </div>
            </div>
          </div>
          <!-- Carousel End-->
        </div>
      </section>
      <section class="bg-white bar container">
        <div class="col-md-12">
          <h2 class="text-uppercase">Cette sélection est uniquement pour vous</h2>
              <p class="text-muted lead">Découvrez depuis chez vous une séléction des nos meilleurs produits choisis uniquement selon vos besoins, Consultez la section <b>SHOP </b>pour plus d'articles pertinents .</p>
              <div class="row products products-big">
                <!-- Affichage de message d'erreur' -->
                <div id="message"></div>
                <!-- Affichages des 6 derniers articles publiés -->
                <div id="data_product">
                
                </div>
                
              </div>
              
              <div class="pages">
                <p class="loadMore text-center"><a href="shop.php" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Afficher d'autres</a></p>
                
              </div>
            </div>
      </section>
      <section class="bar background-pentagon no-mb text-md-center">
        <div class="container">
          <div class="heading text-center">
            <h2>Témoignages</h2>
          </div>
          <p class="lead">Nos clients nous font confiance et témoignent sur la qualité des produits que nous leur offrons, voici ce que disent nos client sur nos produits</p>
          <!-- Carousel Start-->
          <ul class="owl-carousel testimonials list-unstyled equal-height">
            <?php if (!empty($all_publicite)) {
              foreach ($all_temoigages as $res): ?>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p><?= $res['message'] ?></p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5><?= $res['nom'] ?></h5>
                      <p><?= $res['fonction'] ?></p>
                    </div>
                    <div class="avatar"><img alt="" src="img/<?= $res['image'] ?>" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; } ?>
            
          </ul>
          <!-- Carousel End-->
        </div>
      </section>
      <section style="background: url(img/fixed-background-2.jpg) center top no-repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
        <div class="dark-mask"></div>
        <div class="container">
          <div class="icon icon-outlined icon-lg"><i class="fa fa-info"></i></div>
          <h3 class="text-uppercase">Besoin d'un conseil?</h3>
          <p class="lead">Ecrivez-nous directement et nous vous assisterons dépuis chez-vous dans un bref délai.</p>
          <p class="text-center"><a href="contact.php" class="btn btn-template-outlined-white btn-lg"> Nous contacter</a></p>
        </div>
      </section>
      <section class="bg-white bar">
        <div class="container">
          <div class="heading text-center">
            <h2>Pour nos articles</h2>
          </div>
          <p class="lead">Découvrez les astuces et conseils proposés par nos experts sur l'installation et utilisation des nos produits pour une garantie optimale et faire durer le plus longtemps possible votre appareils </a></p>
          <div class="row">
          <?php if (!empty($all_blog)) {
            foreach ($all_blog as $res): ?>
            <div class="col-lg-3">
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
      </section>
      <section class="bar bg-gray">
        <div class="container">
          <div class="heading text-center">
            <h2>Nos Clients</h2>
          </div>
          <ul class="list-unstyled owl-carousel customers no-mb">
            <li class="item"><img src="img/customer-1.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/customer-2.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/customer-3.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/customer-4.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/customer-5.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/customer-6.png" alt="" class="img-fluid"></li>
          </ul>
        </div>
      </section>
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Prêt à vous lancer ?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">   <a href="shop.php" class="btn btn-template-outlined-white">Visiter notre shop maintenant</a></div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <?php require_once('footer/footer.php') ?>
    </div>
    <!-- Javascript files-->
    <script>
      count_items_in_cart();
      get_all_products();
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

      //Methode pour afficher tous les articles
      function get_all_products(){
        $.ajax({
          url:'data_products.php',
          type:'post',
          data:{dataProduct:"data_products"},
          success:function(response){
            $("#data_product").html(response);
            //$("#cart-panier").html(response);
          }
        });
      }

      //Ajout du produit dans le panier
      $(document).ready(function(){
        $(document).on("click",".addItemBtn", function(e){
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
            }
          });     

        });
      });

      $(document).on("click",".page-link", function(e){
          e.preventDefault();

        var id = $(this).attr("value");
        var pageCourante = 0;
        var articleparPage = 6;

        if(id.length >= 0){
           pageCourante = id;
        }else{
          pageCourante = 1;
        }

        if(id == 0){
          var depart = 0;
        }else{
          var depart = (pageCourante - 1) * articleparPage;
        }

        $.ajax({
          url:'data_products.php',
          type:'get',
          data:{depart:depart, pageCourante : articleparPage},
          success:function(response){
            $("#data_product").html(response);
            window.scrollTo(-0,1);
            //$("#cart-panier").html(response);
          }
        });

      });
    </script>
  </body>
</html>