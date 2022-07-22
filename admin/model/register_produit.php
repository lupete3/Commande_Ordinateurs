<?php 
	include ('connex.php');

	if(isset($_POST['save'])){

	$designation = $_POST['designation'];
	$prix = $_POST['prix'];
	$qte = $_POST['qte'];
	$categorie = $_POST['categorie'];
	$disponible = $_POST['disponible'];
	$detail = $_POST['detail'];

	
	$im=$_FILES['photo']['name'];
    $r_tmp=$_FILES['photo']['tmp_name'];
    move_uploaded_file($r_tmp,"../../img/$im");


	if(!empty($designation) AND !empty($prix) AND !empty($qte) AND !empty($detail)){

		$req1 = $bd->prepare('SELECT * FROM produit WHERE designation = ? AND id_cat = ?');
		$req1->execute(array($designation,$categorie));
		if ($res1 = $req1->fetch()) {
			header('location:../pages/gProduits.php?sms=1');
		}else{
			$req=$bd->prepare('INSERT INTO produit(designation,prix,quantite,disponible,description,image,id_cat) VALUES (?,?,?,?,?,?,?)');

			if ($req->execute(array($designation,$prix,$qte,$disponible,$detail,$im,$categorie))){

				header('location:../pages/gProduits.php?sms=2');
			}else{

				header('location:../pages/gProduits.php?sms=3');
			}
		}	
        
	}else{
		header('location:../pages/gArticles.php?sms=4');
	}
}

?>