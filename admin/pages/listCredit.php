<?php 
  require_once('../model/security_adm.php'); 
  
  require_once '../model/Model.php';

  $model = new Model;

  $list_category = $model->getCreance();

  if ($list_category) {
    foreach($list_category as $res){ ?>
                               
      <tr style="font-size: 13px;">
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['nom_complet'] ?></td>
        <td><?php echo $res['montant'] ?></td>
        <td><?php echo $res['date_credit'] ?></td>
        <td><?php echo $res['date_paye_estim'] ?></td>
        <td><?php echo $res['observation'] ?></td>
        <td>
          <a href="" id="editBtn" value="<?php echo $res['id'] ?>" class="btn btn-primary btn-sm " title=""><i class="fa fa-edit"></i></a>
          <?php 
          if ($type_user != 'Admin') {
            # code...
            }else{  ?> 
                <a href="" id="deleteBtn" value="<?php echo $res['id'] ?>" class="btn btn-danger btn-sm " title=""><i class="fa fa-trash"></i></a>
          <?php 
            }
          ?> 
        </td>
      </tr>
    <?php  
    } 
  }else{
    echo'
      <tr>
        <td colspan="4" class="text-center" headers="">
          <h3>Aucune donné trouvée !</h3>
        </td>
      </tr>
    ';
  }

  ?>          
