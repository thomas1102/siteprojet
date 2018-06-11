<?php

	require 'connexion.php';
	require('Database.php');
	
	
$co=connexion();

$db = new Database($co);
	
	$db->deconnection();
	
	header("Location: index.html");

?>