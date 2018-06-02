<?php 
require 'connexion.php';
require('Database.php');

$co=connexion();

$db = new Database($co);


	

		if(isset($_POST['inscrire'])){	
			if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mail']) AND isset($_POST['mdp'])){
					
					$nom=$_POST['nom'];
					$prenom=$_POST['prenom'];
					$mail=$_POST['mail'];
					$mdp=$_POST['mdp'];
					
					$checkinscrit = $co->prepare('SELECT mail FROM utilisateur WHERE mail = :mail ' );
					$checkinscrit->execute(array('mail'=> $_POST['mail']));
					
					$result = $checkinscrit->fetchAll();
			
					if(count($result)==0){
						$db->inscription($_POST["mdp"],$_POST["mail"],$_POST["prenom"],$_POST["nom"]);
					
						echo "success !";
						//header('Location:index.php');
					}
					else
					{
						echo "Ce mail est déjà associé à un compte !";
					}
			}
		}	




?>