<?php 

  require_once '../model/Model.php';

  $model = new Model;

  $list_ventes = $model->getVentesAdmin();

  if ($list_ventes) {
    foreach($list_ventes as $res){ ?>
                               
      <tr style="font-size: 13px;">
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['designation'] ?></td>
        <td><?php echo number_format($res['prix'],2) ?> $</td>
        <td><?php echo $res['quantite'] ?></td>
        <td><?php echo number_format(($res['prix'] * $res['quantite']),2) ?> $</td>
        <td><?php echo $res['date_vente'] ?></td>
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
