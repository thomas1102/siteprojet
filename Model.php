<?php 

class Database{
	
	private $bd;
	
	public function__construct($db)
	{
		$this->setDb($db);
	}
	
	public function setDb(PDO $b){
		$this->_bd=$b;
	
	}
	
	//Connexion
	public function connexion_user($mail, $mdp)
	{
		$sql="select * from utilisateur where mail='".$mail."' and mdp='".$mdp."'";
		$checkuser= $bd->query($sql);
		return $checkuser;
	}
	
	public function connecter($mail,$nom,$prenom,$login){
		$_SESSION['mail']= $mail;
		$_SESSION['nom']= $nom;
		$_SESSION['prenom']= $prenom;
	}

	public function deconnection(){
		session_destroy();
	}

	//Recupérer un utilisateur
	public function getUtilisateur($mail){
		$req="SELECT nom,prenom FROM utilisateur WHERE mail=".$mail.";";
		$result=$bd->query($req);
	}
	
	//Recupérer liste de matières
	public function getListMatiere(){
		$req="SELECT * FROM matiere ";
		$listmat=$bd->query($req);
		return $listmat;
	}
	
	//Recupérer liste des alternances
	public function getListAlternance(){
		$req="SELECT * FROM posteAlternance ";
		$listAlt=$bd->query($req);
		while($donnees=$sql->fetch(PD::FETCH_ASSOC)) { $list[]=new posteAlternance($donnees);}
		return $listAlt;
	}
	
	//Recupérer liste des projets	
	public function getListProjetTut(){
		$req="SELECT * FROM projetTut ";
		$listProjet=$bd->query($req);
		while($donnees=$sql->fetch(PD::FETCH_ASSOC)) { $list[]=new projetTut($donnees);}
		return $listAlt;
	}
	
	//Recupérer note d'un étudiant
	public function getNoteEtudiant($mail){
		$req="SELECT nom,prenom,noteEleve FROM NOTE N, UTILISATEUR U WHERE n.eleve=u.mail and n.eleve=".$mail.";";
		$result=$bd->query($req);
	}
	
	//Recupérer note d'un étudiant
	public function getProjetTut($mail){
		$req="SELECT titreProjet FROM projetTut p,UTILISATEUR U WHERE p.administrateur=u.mail and u.mail=".$mail.";";
		$result=$bd->query($req);
	}
	
	public function getOffreAlt($mail){
		$req="SELECT titrePoste FROM posteAlternance p,UTILISATEUR U WHERE p.administrateur=u.mail and u.mail=".$mail.";";
		$result=$bd->query($req);
	}
	
	//Matière d'un etudiant
	public function MatEtudiant($mail){
		$req="SELECT libMatiere FROM matiere m, note n,utilisateur u  WHERE u.mail=n.eleve and u.mail=".$mail.";";
		$result=$bd->query($req);
	}
	
	//Ajout Offre projet
	public function ajoutOffre(ProjetTut $p){
        $req = 'INSERT INTO projetTut (idprojet, titreProjet, adresse, administrateur, mailContact, descriptionPoste) VALUES (:idprojet, :titreProjet, :administrateur, :mailContact, :descriptionPoste, NOW())';
        $sql = $this->$bd->prepare($req);
        $sql->bindValue(':idprojet', $p->getIdProjet(), PDO::PARAM_INT);
        $sql->bindValue(':titreProjet', $p->getTitreProjet(), PDO::PARAM_STR);
        $sql->bindValue(':adresse', $p->getAdresse(), PDO::PARAM_STR);
        $sql->bindValue(':administrateur', $p->getAdmin(), PDO::PARAM_STR);
		$sql->bindValue(':mailContact', $p->getContact(), PDO::PARAM_STR);
		$sql->bindValue(':descriptionPoste', $p->getDescription(), PDO::PARAM_STR);
        $sql->execute();
    }
	
	//Ajout Offre alternance
	public function ajoutOffreAlt(PosteAlternance $p){
        $req = 'INSERT INTO projetTut (idposte, titrePoste, adresse, administrateur, mailContact, descriptionPoste) VALUES (:idposte, :titreProjet, :administrateur, :mailContact, :descriptionPoste, NOW())';
        $sql = $this->$bd->prepare($req);
        $sql->bindValue(':idposte', $p->getIdProjet(), PDO::PARAM_INT);
        $sql->bindValue(':titreProjet', $p->getTitreProjet(), PDO::PARAM_STR);
        $sql->bindValue(':adresse', $p->getAdresse(), PDO::PARAM_STR);
        $sql->bindValue(':administrateur', $p->getAdmin(), PDO::PARAM_STR);
		$sql->bindValue(':mailContact', $p->getContact(), PDO::PARAM_STR);
		$sql->bindValue(':descriptionPoste', $p->getDescription(), PDO::PARAM_STR);
        $sql->execute();
    }
	
	//Modifier un offre alternance
	public function MajOffreAlt($mail,$titreProjet,$adresse,$administrateur,$mailContact,$descriptionPoste,$idalt){
		 $sql = "UPDATE posteAlternance SET titreProjet=".$titreProjet."and adresse=".$adresse." and administrateur=".$administrateur."and mailContact=".$mailContact."and descriptionPoste=".$descriptionPoste."WHERE idposte=".$idalt.";";
		//Prepare statement
		$stmt = $bd->prepare($sql);
		//execute the query
		$stmt->execute();
	));
		
	}
	
	//Modifier un offre projet
	public function MajOffreProjet($mail,$titreProjet,$adresse,$administrateur,$mailContact,$descriptionPoste,$idprojet){
		 $sql = "UPDATE projetTut SET titreProjet=".$titreProjet."and adresse=".$adresse." and administrateur=".$administrateur."and mailContact=".$mailContact."and descriptionPoste=".$descriptionPoste."WHERE idprojet=".$idprojet.";";
		//Prepare statement
		$stmt = $bd->prepare($sql);
		//execute the query
		$stmt->execute();
	));
		
	}
	
	//Supprimer un offre alternance
	public function SuppOffreAlt($idalt){
		$sql = "DELETE FROM posteAlternance where idposte".$alt.";";
		$bd->exec($sql);
		$stmt->execute();
	));
	
	//Supprimer un offre de projet
	public function SuppOffreProjet($idProjet){
		$sql = "DELETE FROM projetTut where idprojet".$idProjet.";";
		$bd->exec($sql);
		$stmt->execute();
	));
	
	
	
	
	
	
	
	
	
	
	
}
	
	
	
	
	
	
	
 ?>
