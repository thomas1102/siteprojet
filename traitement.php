<?php
require 'connexion.php';
require 'Database.php';
require 'PosteAlternance.php';
session_start();

$co=connexion();

$db = new Database($co);

if(isset($_POST['ajouterAlt'])){
	if(isset($_POST['TitrePoste']) AND isset($_POST['AdressePoste']) AND isset($_POST['MailPoste']) AND isset($_POST['DescriptionPoste'])){

      $titreposte=$_POST['TitrePoste'];
      $adresseposte=$_POST['AdressePoste'];
      $mailposte=$_POST['MailPoste'];
      $descriptionposte=$_POST['DescriptionPoste'];

      $postealt=new PosteAlternance($donnees[$titreposte]);
			$checkAjout=$db->ajoutOffreAlt($postealt);
      echo "ajouté !";
	}
}





?>
