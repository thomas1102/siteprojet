<?php
require 'connexion.php';
require('Database.php');

$co=connexion();

$db = new Database($co);


		if(isset($_POST['inscrire']) && isset($_POST['statut'])){
			if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mail']) AND isset($_POST['mdp'])){

					$statut=$_POST['statut'];
					$nom=$_POST['nom'];
					$prenom=$_POST['prenom'];
					$mail=$_POST['mail'];
					$mdp=$_POST['mdp'];

					$checkinscrit = $co->prepare('SELECT mail FROM utilisateur WHERE mail = :mail ' );
					$checkinscrit->execute(array('mail'=> $_POST['mail']));
					$result = $checkinscrit->fetchAll();

					echo count($result);
	//header('Location:index.php');
						if(count($result)==0){
							switch ($_POST['statut']) {
    								case 'Etudiant':
										$db->inscription($_POST["mdp"],$_POST["mail"],$_POST["prenom"],$_POST["nom"],1);
										echo "Etudiant ajouté success !";
        						break;
    								case 'Entreprise':
										$db->inscription($_POST["mdp"],$_POST["mail"],$_POST["prenom"],$_POST["nom"],2);
										echo "Entreprise ajouté success !";
        						break;
    								case 'Administrateur':
										$db->inscription($_POST["mdp"],$_POST["mail"],$_POST["prenom"],$_POST["nom"],3);
										echo "Admin ajouté success !";
        						break;
										case 'Personnel':
										$db->inscription($_POST["mdp"],$_POST["mail"],$_POST["prenom"],$_POST["nom"],4);
										echo "Personnel ajouté success !";
        						break;
									}
						}
						else
							{
								echo "Ce mail est déjà associé à un compte !";
							}




			}
		}




?>
