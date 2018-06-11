<?php
require 'connexion.php';
require 'Database.php';
require 'autoload.php';

session_start();

$co=connexion();

$db = new Database($co);

if(isset($_POST['ajoutNote'])){
	if(isset($_POST['listEleve']) AND isset($_POST['listMatiere']) AND isset($_POST['titreDevoir']) AND isset($_POST['note'])){
	
	/*$matiere=new matiere(array(
	'libMatiere'=>$_POST['listMatiere']));*/
	
	$id=$db->getIdMatiere($_POST['listMatiere']);
	

	  $note = new note(array(
	'idMatiere'=>$id,
	'noteMax'=>$_POST['note'],
	'noteEleve'=>$_POST['note'],
	'titreDevoir'=>$_POST['titreDevoir'],
	'professeur'=>$_SESSION['nom'],
	'eleve'=>$_POST['listEleve']));

	$db->ajoutNote($note);
	}
}







?>
