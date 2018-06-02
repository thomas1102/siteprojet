<?php
	//connection bd
	/*{
		$bdd = new PDO('mysql:host=localhost;dbname=webdawi;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{	
		die('Erreur : '.$e->getMessage());
	}
	*/
	
	function connexion(){
		define("DB_HOST", "localhost");
		define("DB_NAME", "webdawi");
		define("DB_PWD", "root");
		define("DB_USER", "root");
		try{
			$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME."", DB_USER, DB_PWD);
		}catch(PDOException $e){
			print "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
		
		return $dbh;
	}
	
?>