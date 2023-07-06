<?php 

	// include ('connex.php');
	// Importation de la classe Model
  	include_once('Model.php');

 	$model = new Model;

	if(isset($_POST['log_in'])){
		$user = $_POST['login'];
		$pwd = $_POST['password'];

		if ($admin_exist = $model->adminExists($user)) {

	        foreach($admin_exist as $res):
	         	if (password_verify($pwd, $res["password"])) {

		            session_start();
		            $_SESSION['profile']['admin']=$res;

					$type = $_SESSION['profile']['admin']['type'];

					if($type === "Admin"){
						header('location:../pages/admin');
					}else{
						header('location:../pages/gerant');
					}
	            
	          	}else{
		            header('location:../index?err=Mot de passe incorrect');
	          	}
	        
	        endforeach;
	    }else{
	        header('location:../index?err=Login incorrect');
	    }

	}

?>