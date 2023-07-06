<?php

	session_start();

	if(!isset($_SESSION['profile']['admin'])){
		header('location:../index');
    }else 
    
    $id= $_SESSION['profile']['admin']['id'];
	$username= $_SESSION['profile']['admin']['login'];

	$type_user = $_SESSION['profile']['admin']['type'];
	$nomm = $_SESSION['profile']['admin']['nom_complet'];

 ?>