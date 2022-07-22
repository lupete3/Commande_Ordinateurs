<?php 

  require_once '../model/Model.php';

  $model = new Model;

  $list_transfert = $model->getTransfertsAll();

  if ($list_transfert) {
    foreach($list_transfert as $res){ ?>
                               
      <tr style="font-size: 13px;">
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['libelle'] ?></td>
        <td><?php echo $res['qte'] ?></td>
        <td><?php echo $res['date_sortie'] ?></td>
        <td>
          <a href="" id="deleteBtn" value="<?php echo $res['id'] ?>" class="btn btn-danger btn-sm " title=""><i class="fa fa-trash"></i></a>
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
