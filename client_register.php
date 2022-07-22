<?php require_once('include/header.php'); ?>   
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">New Account / Sign In</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active">Nouveau compte / Se connecter</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Nouveau compte</h2>
                <p class="lead">Vous n'avez pas encore un compte client?</p>
                <p>En vous enregistrant chez nousn, vous bénéficierez des nouveaux produits avec une reduction à chaque vente dans notre shop!</p>
                <p class="text-muted">Si vous avez une question, prière <a href="contact.php">nous contacter</a>, notre service d'assiatnce fonctionne 24/7.</p>
                <hr>
                <div id="message"></div>

                <form action="" method="post" id="form-client">
                  <div class="form-group">
                    <label for="name-login"><b>Nom complet</b></label>
                    <input id="name-login" name="nom" type="text" class="form-control nom">
                  </div>
                  <div class="form-group">
                    <label for="email-login"><b>Téléphone</b></label>
                    <input id="email-login" name="telephone" type="phone" class="form-control telephone">
                  </div>
                  <div class="form-group">
                    <label for="name-login"><b>Avenue</b></label>
                    <input id="name-login" name="avenue" type="text" class="form-control avenue">
                  </div>
                  <div class="form-group">
                    <label for="email-login"><b>Quartier</b></label>
                    <input id="email-login" name="quartier" type="text" class="form-control quartier">
                  </div>
                  <div class="form-group">
                    <label for="name-login"><b>Commune</b></label>
                    <input id="name-login" name="commune" type="text" class="form-control commune">
                  </div>
                  <div class="form-group">
                    <label for="email-login"><b>Ville</b></label>
                    <input id="email-login" name="ville" type="text" class="form-control ville">
                  </div>
                  <div class="form-group">
                    <label for="password-login"><b>Mot de passe</b></label>
                    <input id="password-login" name="password" type="password" class="form-control password">
                  </div>
                  <div class="form-group">
                    <label for="password-login"><b>Répeter le Mot de passe</b></label>
                    <input id="password-login" name="password1" type="password" class="form-control password1">
                  </div>
                  <div class="text-center">
                    <button type="button" id="btnAddCli" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Connexion</h2>
                <p class="lead">Avez vous déjà un compte client?</p>
                <p class="text-muted">Connecte-vous directement et profiter des nos meilleurs produits que nous mettons à votre disposition.</p>
                <hr>
                <div id="messageLog"></div>
                
                <form action="" method="post" id="form-login-client">
                  <div class="form-group">
                    <label for="email-login"><b>Téléphone</b></label>
                    <input id="email-login" name="telephone" type="phone" class="form-control telephoneLog">
                  </div>
                  <div class="form-group">
                    <label for="password-login"><b>Mot de passe</b></label>
                    <input id="password-login" name="password" type="password" class="form-control passwordLog">
                  </div>
                  <div class="text-center">
                    <button type="button" id="btnLogCli" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Connexion</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- FOOTER -->
      <?php include_once('footer/footer.php'); ?>
    </div>
   

    <script>
      
      $(document).ready(function(){

        count_items_in_cart()

        //Methode pour afficher le nombres des articles dans le panier
        function count_items_in_cart(){
          $.ajax({
            url:'action.php',
            type:'get',
            data:{cartItem:"cart_item"},
            success:function(response){
              $(".cart-item").html(response);
            }
          });
        }

        //Enregistrement utilisateur
        $("#btnAddCli").click(function(e){
          e.preventDefault();

          var $form = $(this).closest("#form-client");
          var nom = $form.find(".nom").val();
          var telephone = $form.find(".telephone").val();
          var avenue = $form.find(".avenue").val();
          var quartier = $form.find(".quartier").val();
          var commune = $form.find(".commune").val();
          var ville = $form.find(".ville").val();
          var password = $form.find(".password").val();
          var password1 = $form.find(".password1").val();

          var action = 'add_client';

          if (password != password1) {
            alert('Les deux mots de passe ne correspondent pas !');
          }else{

            $.ajax({
              url: 'action.php',
              type: 'post',
              data: {action:action,nom:nom,telephone:telephone,avenue:avenue,quartier:quartier,commune:commune,ville:ville,password:password,},
              success: function(response){
                $("#message").html(response);
                window.scrollTo(0,0);
                //count_items_in_cart();
              },
            });
          }  

        });

        //Connexion de l'utilisateur
        $("#btnLogCli").click(function(e){
          e.preventDefault();

          var $form = $(this).closest("#form-login-client");
          var telephone = $form.find(".telephoneLog").val();
          var password = $form.find(".passwordLog").val();

          var action = 'login_client';

          $.ajax({
            url: 'action.php',
            type: 'post',
            data: {action:action,telephone:telephone,password:password,},
            success: function(response, textStatus){
              if(response == "success"){
                window.location.href = 'shop.php';
              }else{
                $("#messageLog").html(response);
                window.scrollTo(0,0);
              }
              
                //count_items_in_cart();
            },
          });  

        });
      });
    </script>
  </body>
</html>