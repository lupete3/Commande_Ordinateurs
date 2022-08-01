<?php 

  $index = 'active';

  require_once('include/header.php');

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  $all_publicite = $model->getAllPublicites();

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
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                  <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
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
            <div class="col-lg-3">
              <div class="home-blog-post">
                <div class="image"><img src="img/portfolio-4.jpg" alt="..." class="img-fluid">
                  <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                </div>
                <div class="text">
                  <h4><a href="#">Fashion Now </a></h4>
                  <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                  <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="home-blog-post">
                <div class="image"><img src="img/portfolio-3.jpg" alt="..." class="img-fluid">
                  <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                </div>
                <div class="text">
                  <h4><a href="#">What to do</a></h4>
                  <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                  <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="home-blog-post">
                <div class="image"><img src="img/portfolio-5.jpg" alt="..." class="img-fluid">
                  <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                </div>
                <div class="text">
                  <h4><a href="#">5 ways to look awesome</a></h4>
                  <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                  <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="home-blog-post">
                <div class="image"><img src="img/portfolio-6.jpg" alt="..." class="img-fluid">
                  <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                </div>
                <div class="text">
                  <h4><a href="#">Fashion Now </a></h4>
                  <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                  <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                </div>
              </div>
            </div>
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
            <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Visiter notre shop maintenant</a></div>
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