<?php 

  $shop = 'activem';

  require_once('include/header.php'); 

  // Importation de la classe Model
  include_once('admin/model/Model.php');

  $model = new Model;

  $all_ventes = $model->getAllVentesClient($id);
  
  if (empty($id) && $type != "Client") {
    header('Location:index.php');
  }else

  $profile_client = $model->profileClient($id);

  foreach ($profile_client as $res) {

    $nom_client = $res['nom_client']; 
    $email_client = $res['email_client']; 
    $telephone_client = $res['telephone_client']; 
    $avenue = $res['avenue'];
    $quartier = $res['quartier']; 
    $commune = $res['commune'];
    $ville = $res['ville'];
    $province = $res['province'];
    $pays = $res['pays'];
    $code_postal = $res['code_postal'];
    $avatar = $res['avatar'];
    $password = $res['password'];
  }

?>
    <!-- Top bar end-->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Profile</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="client_espace">Accueil</a></li>
                <li class="breadcrumb-item active">Profile Client</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar mb-0">
            <?php require_once('include/nav.php'); ?>
            <div id="customer-orders" class="col-md-9">
              <div class="row">
                <div class="col-md-12">
                  <?php 
                    if (isset($_GET['success'])) {
                      echo '
                        <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h6>Modifications effectuées avec succès</h6>
                        </div>
                      ';
                    }else if (isset($_GET['error'])) {
                      echo '
                        <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h6>L\' ancien mot de passe n\'est pas correct</h6>
                        </div>
                      ';
                    }
                   ?>
                </div>
                <div class="col-md-5">
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="img/avatar.png" style="width: 60px;" 
                             alt="User profile picture">
                      </div>

                      <h3 class="profile-username text-center"><?php echo $nom_client ?></h3>

                      <p class="text-muted text-center"><?php echo 'Client' ?></p>
                      <hr>                

                      <div class="card-body">
                      <strong><i class="fa fa-envelope mr-1"></i> Email</strong>

                      <p class="text-muted">
                        <?php echo $email_client ?>
                      </p>

                      <hr>

                      <strong><i class="fa fa-phone mr-1"></i> Téléphone</strong>

                      <p class="text-muted"><?php echo $telephone_client ?></p>

                      <hr>

                      <strong><i class="fa fa-map-marker mr-1"></i> Avenue</strong>

                      <p class="text-muted"><?php echo $avenue ?></p>

                      <hr>

                      <strong><i class="fa fa-map-marker mr-1"></i> Quartier</strong>

                      <p class="text-muted"><?php echo $quartier ?></p>

                      <hr>

                      <strong><i class="fa fa-map-marker mr-1"></i> Commune</strong>

                      <p class="text-muted"><?php echo $commune ?></p>

                      <hr>

                      <strong><i class="fa fa-map-marker mr-1"></i> Ville</strong>

                      <p class="text-muted"><?php echo $ville ?></p>

                      <hr>

                      <strong><i class="fa fa-map-marker mr-1"></i> Province</strong>

                      <p class="text-muted"><?php echo $province ?></p>

                      <hr>

                      <strong><i class="fa fa-map-marker mr-1"></i> Pays</strong>

                      <p class="text-muted"><?php echo $pays ?></p>

                      <hr>

                      <strong><i class="fa fa-credit-card mr-1"></i> Code Postal</strong>

                      <p class="text-muted"><?php echo $code_postal ?></p>

                      <hr>

                    </div>

                    </div>
                    <!-- /.card-body -->
                  </div><br>
                  <!-- /.card -->
                </div>
                <div class="col-md-7">
                  <form action="" id="form" method="POST" enctype="multipart/form-data">
             
                  <div class="card ">
                    <div class="card-header text-uppercase">Modifier le profile</div>
                      <div class="card-body">
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-12">
                            <!-- Affichage de la notification -->
                            <div id="result">
                              
                            </div>
                            </div>
                    
                            <div class="col-md-12">
                              <label for="nom"><b>Nom</b></label>
                              <input type="text" id="nom" name="nom" value="<?php echo $nom_client ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="email"><b>Email</b></label>
                              <input type="email" id="email" name="email" value="<?php echo $email_client ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="phone"><b>Téléphone</b></label>
                              <input type="" id="phone" name="phone" value="<?php echo $telephone_client ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="avenue"><b>Avenue</b></label>
                              <input type="" id="avenue" name="avenue" value="<?php echo $avenue ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="quartier"><b>Quartier</b></label>
                              <input type="" id="quartier" name="quartier" value="<?php echo $quartier ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="commune"><b>Commune</b></label>
                              <input type="" id="commune" name="commune" value="<?php echo $commune ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="commune"><b>Ville</b></label>
                              <input type="" id="ville" name="ville" value="<?php echo $ville ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="pays"><b>Pays</b></label>
                              <select name="pays" id="pays" class="form-control" >
                                <option value="" selected disabled>---Choisir votre pays---</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                
                              </select>
                              <label for="province"><b>Province</b></label>
                              <input type="" id="province" name="province" value="<?php echo $province ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="code"><b>Code Postal</b></label>
                              <input type="" id="code" name="code" value="<?php echo $code_postal ?>" class="form-control" placeholder=""  autocomplete="off">
                              <label for="ancien"><b>Ancien mot de passe</b></label>
                              <input type="password" id="ancien" name="ancien" class="form-control" placeholder=""  autocomplete="off" required>
                              <label for="nouveau"><b>Nouveau Mot de passe</b></label>
                              <input type="password" id="nouveau" name="nouveau" class="form-control" placeholder=""  autocomplete="off" required><br>
                            </div>
                            <div class="col-md-12">
                              <button type="submit" name="save_edit" id="save_edit" class="btn btn-md btn-primary "><i class="fa fa-check-circle"></i> Mettre à jour les modifications </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <!-- FOOTER -->
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

      $("#paie-modal").hide();
      $(".paie").on("click",function(){
        var $form = $(this).closest("#valid-paie");
        var id = $(this).attr("value");

        $("#paie-modal").modal("show");
        $("#id_com").val(id)
        
      });

      $("#btnConf").on("click", function(){

        var $form = $(this).closest("#confirm-form");
        var id_conf = $form.find(".id_com").val();
        var code = $form.find(".code").val();

        $.ajax({
          type:"post",
          url:"actions_client.php",
          data:{
            id_conf:id_conf,code:code
          },
          success:function(response){
            $("#etat").html(response);

          }
        });

      });

      $(".btnDetail").on("click", function(){

        var $form = $(this).closest("#valid-paie");
        var id = $(this).attr("value");

        window.location.href="commande_detail?id="+id;

      });
    </script>
  </body>
</html>

<?php
    if(isset($_POST['save_edit'])){
      if(!empty($_POST['phone']) || !empty($_POST['ancien']) || !empty($_POST['nouveau'])){

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $avenue = $_POST['avenue'];
        $quartier = $_POST['quartier'];
        $commune = $_POST['commune'];
        $ville = $_POST['ville'];
        $province = $_POST['province'];
        $pays = $_POST['pays'];
        $code = $_POST['code'];
        $ancien = $_POST['ancien'];
        $nouveau = $_POST['nouveau'];

        $nouveauPassword = password_hash($_POST['nouveau'], PASSWORD_DEFAULT);

        if (password_verify($ancien, $password)) {

          if($model->editClient(
            $nom,
            $email,
            $phone,
            $avenue,
            $quartier,
            $commune,
            $ville,
            $province,
            $pays,
            $code,
            $nouveauPassword,
            $id
          )){ ?>

            <script type="text/javascript">
              window.location = 'profile?success=Valide';
            </script>

          <?php }else{ ?>

            <script type="text/javascript">
              window.location = 'profile?success=Valide';
            </script>

        <?php } }else{ ?>
          
          <script type="text/javascript">
            window.location = 'profile?error=Ancien mot de passe est incorrect';
          </script>
        
        <?php }
      }else{ ?>

        <script type="text/javascript">
            window.location = 'profile?error=Copléter tous les champs';
        </script>

      <?php }
                
    }

  ?>