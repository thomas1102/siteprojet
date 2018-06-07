<?php
require 'connexion.php';
require('Database.php');
session_start();

$co=connexion();

$db = new Database($co);

if(isset($_POST['connexion'])){
	if(isset($_POST['mail']) AND isset($_POST['mdp'])){

			$checkuser=$db->connexion_user($_POST['mail'],$_POST['mdp']);

			$UserValide=false;
			$_SESSION['typeUser'];
			while($result=$checkuser->fetch())
			{
				$UserValide=true;
				$db->connecter($result["mail"],$result["nom"],$result["prenom"]);
			}

			$checktype=$db->getTypeUser($_POST['mail']);

			while($type=$checktype->fetch())
			{
				$_SESSION['typeUser'] =$type['libType'];
			}

			if($UserValide==true){

				echo "success";
				header("Location: index.php");

			}else{
				echo "fail";
			}
	}
}





?>
