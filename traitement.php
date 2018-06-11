<?php
require 'connexion.php';
require 'Database.php';
require 'autoload.php';

session_start();

$co=connexion();

$db = new Database($co);

if(isset($_POST['ajouterAlt'])){
	if(isset($_POST['TitrePoste']) AND isset($_POST['AdressePoste']) AND isset($_POST['MailPoste']) AND isset($_POST['DescriptionPoste'])){


	  $p = new posteAlternance(array(
	'titreposte'=>$_POST['Titreposte'],
	'adressePoste'=>$_POST['AdressePoste'],
	'mailPoste'=>$_POST['MailPoste'],
	'descriptionPoste'=>$_POST['DescriptionPoste']));

	$db->ajoutOffreAlt($p);
	}
}







?>
