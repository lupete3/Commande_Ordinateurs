<?php 

  require_once '../model/Model.php';

  $model = new Model;

  $list_temoignages = $model->getTemoignage();

  if ($list_temoignages) {
    foreach($list_temoignages as $res){ ?>
                               
      <tr style="font-size: 13px;">
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['nom'] ?></td>
        <td><?php echo $res['fonction'] ?></td>
        <td><?php echo $res['message'] ?></td>
        <td><?php echo $res['date_pub'] ?></td>
        <td><img src="../../img/<?php echo $res['image'] ?>" width="70px" alt=""></td>

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
