<?php 
  
  require_once '../model/Model.php';

  $model = new Model;

  $id = $_POST['id'];

  //Appel de la méthode pour afficher les données de la base de donnée

  $row = $model->getUserSingle($id);

  if (!empty($row)) { 
    foreach($row as $data):
    ?>

    <form action="" method="post" was-validate>
      <div class="form-group">
        <input type="hidden" name="idM" value="<?php echo $data['id']; ?>" id="idM" class="form-control" placeholder="Id" required="required" >
      </div>
      <div class="form-group">
        <label for="nom">Nom complet</label>
        <input type="text" name="nom" value="<?php echo $data['nom_complet']; ?>" id="nomM" class="form-control" placeholder="Nom complet" required="required" >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="Détail" value="<?php echo $data['email']; ?>" id="emailM" class="form-control" placeholder="Email" required="required" >
      </div>
      </div>
      <div class="form-group">
        <label for="email">Téléphone</label>
        <input type="text" name="Détail" value="<?php echo $data['telephone']; ?>" id="telephoneM" class="form-control" placeholder="Téléphone" required="required" >
      </div>
      </div>
      <div class="form-group">
        <label for="email">Login</label>
        <input type="text" name="Détail" value="<?php echo $data['login']; ?>" id="loginM" class="form-control" placeholder="Email" required="required" >
      </div>
      </div>
      <div class="form-group">
        <label for="email">Mot de passe</label>
        <input type="text" name="Détail" value="<?php echo $data['password']; ?>" id="passwordM" class="form-control" placeholder="Password" required="required" >
      </div>
      </div>
      <div class="form-group">
        <label for="email">Type Utilisateur</label>
        <select class="form-control" id="typeM">
          <option class="" selected value="<?php echo $data['type']; ?>"><?php echo $data['type']; ?></option>
          <option value="Admin">Admin</option>
          <option value="Gérant">Gérant</option>
        </select><br>
      </div>
      </div>

  <?php endforeach; 
  }
 
 ?>