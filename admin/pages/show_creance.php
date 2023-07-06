<?php 
  
  require_once '../model/Model.php';

  $model = new Model;

  $id = $_POST['id'];

  //Appel de la méthode pour afficher les données de la base de donnée

  $row = $model->getCreanceSingle($id);

  if (!empty($row)) { 
    foreach($row as $data):
    ?>

    <form action="" method="post" was-validate>
      <div class="form-group">
        <input type="hidden" name="idM" value="<?php echo $data['id']; ?>" id="idM" class="form-control" placeholder="Id" required="required" >
      </div>
      <div class="form-group">
        <label for="nom">Nom Creéancier</label>
        <input type="text" name="nom" value="<?php echo $data['nom_complet']; ?>" id="nomM" class="form-control" placeholder="Nom Créancier" required="required" >
      </div>
      <div class="form-group">
        <label for="nom">Montant Créance</label>
        <input type="text" name="montant" value="<?php echo $data['montant']; ?>" id="montantM" class="form-control" placeholder="Nom Créancier" required="required" >
      </div>
      <div class="form-group">
        <label for="nom">Date Estimation Payement</label>
        <input type="date" name="date_paye" value="<?php echo $data['date_paye_estim']; ?>" id="date_payeM" class="form-control" placeholder="Date Payement Estimée" required="required" >
      </div>
      <div class="form-group">
        <label for="email">Description</label>
        <textarea class="form-control" name="detail" id="detailM"><?php echo $data['observation']; ?></textarea>
      </div>
      </div>

  <?php endforeach; 
  }
 
 ?>