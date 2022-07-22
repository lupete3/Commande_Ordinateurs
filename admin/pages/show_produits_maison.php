<?php 
  
  require_once '../model/Model.php';

  $model = new Model;

  $id = $_POST['id'];

  //Appel de la méthode pour afficher les données de la base de donnée

  $row = $model->getProdMaisonSingle($id);

  if (!empty($row)) { 
    foreach($row as $data):
    ?>

    <form action="" method="post" was-validate>
      <div class="form-group">
        <input type="hidden" name="idM" value="<?php echo $data['id']; ?>" id="idM" class="form-control" placeholder="Id" required="required" >
      </div>
      <div class="form-group">
        <label for="nom">Designation</label>
        <input type="text" name="nom" value="<?php echo $data['libelle']; ?>" id="designationM" class="form-control" placeholder="Designation" required="required" >
      </div>
      <div class="form-group">
        <label for="email">Description</label>
        <input type="text" name="qte" value="<?php echo $data['stock']; ?>" id="qteM" class="form-control" placeholder="Quantité Disponible" required="required" >
      </div>
      </div>

  <?php endforeach; 
  }
 
 ?>