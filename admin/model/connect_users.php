<?php 

include ('connex.php');
session_start();

if(isset($_POST['log_in'])){
	$user = $_POST['login'];
	$pwd = $_POST['password'];

	$query1 = $bd->prepare("SELECT * FROM gerant WHERE login = ? AND password = ? ");
	$query1->execute(array($user, $pwd ));


	if ($done=$query1->fetch(PDO::FETCH_ASSOC)) {

		$_SESSION['profile']['admin']=$done;

		header('location:../pages/admin.php');
								
	}else {

		header('location:../index.php?err=Login ou mot de pass incorrect');
				  	
	}

}

 ?>