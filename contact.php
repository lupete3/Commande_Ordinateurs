<?php 

$contact = 'active';

// Importation de la classe Model
include_once('admin/model/Model.php');

require_once('include/header.php');

$model = new Model;

?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Contact</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item active">Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div id="contact" class="container">
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>Nous sommes là pour vous aider</h2>
                </div>
                <p class="lead">
                Etes-vous curieux de quelque chose d'autres? Avez-vous rencontrez des problèmes avec nos produits? Nous sommes une maison qui prend les problèmes des ses clients comme priorité, notre service de maintenance vous repond à chaque fois que vous le sollicitez.
                </p>
                <p class="text-sm">Vueillez contactacter notre service qui travail pour vous 24/7.</p>
              </div>
            </div>
          </section>
          <section>
            <div class="row text-center">
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                  <h3 class="h4">Addresse</h3>
                  <p><?= $entreprise['nom']; ?><br> <?= $entreprise['adresse']; ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                  <h3 class="h4">Centre d'appel</h3>
                  <p>Ce numéro est joignable 24/24 pour tout renseignement par rapport à nos services.</p>
                  <p><strong><?= $entreprise['contact_phone']; ?></strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                  <h3 class="h4">Support Electronique</h3>
                  <p>Vueillez nous laiser un mail et nous répondrons dans le 24H.</p>
                  <ul class="list-unstyled text-sm">
                    <li><strong><a href="mailto:"><?= $entreprise['contact_email']; ?></a></strong></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="bar pt-0">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center">
                  <h2>Contact form</h2>
                </div>
                
              </div>
              <div class="col-md-8 mx-auto">
                <div id="message">
                  
                </div>
                <form class="form-submit">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="firstname">Nom </label>
                        <input id="firstname" type="text" class="nom form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="lastname">Postnom</label>
                        <input id="lastname" type="text" class="postnom form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="email form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="subject">Objet</label>
                        <input id="subject" type="text" class="objet form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="message form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 text-center">
                      <button type="submit" class="btn btn-template-outlined sendMsgBtn"><i class="fa fa-envelope-o"></i> Envoyer le message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
        <div id="map"></div>
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

      //Ajouter le message dans le système 
      $(document).ready(function(){
        $(document).on("click",".sendMsgBtn", function(e){
          e.preventDefault();

          var $form = $(this).closest(".form-submit");
          var nom = $form.find(".nom").val();
          var postnom = $form.find(".postnom").val();
          var email = $form.find(".email").val();
          var objet = $form.find(".objet").val();
          var message = $form.find(".message").val();
          var action = 'send_conatct';

          $.ajax({
            url: 'action.php',
            type: 'post',
            data: {nom:nom,postnom:postnom,email:email,objet:objet,message:message,action:action},
            success: function(response){
              $("#message").html(response);
              $(".form-submit")[0].reset();
            }
          });    

        });
      });
    </script>
    
  </body>
</html>