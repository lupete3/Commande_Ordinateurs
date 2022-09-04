<?php 

  require_once '../model/Model.php';

  $model = new Model;

  $list_category = $model->getUsers();

  if ($list_category) {
    foreach($list_category as $res){ ?>
                               
      <tr style="font-size: 13px;">
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['nom_complet'] ?></td>
        <td><?php echo $res['email'] ?></td>
        <td><?php echo $res['telephone'] ?></td>
        <td><?php echo $res['login'] ?></td>
        <td><?php echo $res['password'] ?></td>
        <td><?php echo $res['type'] ?></td>
        <td>
          <a href="" id="editBtn" value="<?php echo $res['id'] ?>" class="btn btn-primary btn-sm " title=""><i class="fa fa-edit"></i></a> 
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
