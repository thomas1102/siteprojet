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
			while($result=$checkuser->fetch())
			{
				$UserValide=true;
				$db->connecter($result["mail"],$result["nom"],$result["prenom"]);				
			}
			if($UserValide==true){
				
				echo "success";
				
			}else{
				echo "fail";
			}
	}
}





?>