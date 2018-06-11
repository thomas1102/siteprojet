<?php

class projetTut   // Présence du mot-clé class suivi du nom de la classe.

{

  private $idprojet;
  private $titreProjet;
  private $adresse  ;
  private $administrateur  ;
  private $mailContact  ;
  private $descriptionPoste  ;
  
  public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
	
	public function hydrate($donnees){
        foreach($donnees as $k=>$v){
            $method = 'set'.$k;
            if(method_exists($this, $method)) { $this->$method($v);}
        }
    }
  
	public getIdprojet() {
	  
		return $this->idprojet;
	}
  
	public getTitreProjet() {
	  
		return $this->titreProjet;
	}	
  
	public getAdresse() {
	  
		return $this->adresse;
	}
  
	public getAdministrateur() {
	  
		return $this->administrateur;
	}
  
	public getMailContact() {
	  
		return $this->mailContact;
	}
	
	public getDescriptionPoste() {
	  
		return $this->descriptionPoste;
	}
	
  
  
	public function setIdprojet($unIdprojet)
	{
	  
		$this->idposte = $unIdprojet;
		
	}
  
    public function setTitreProjet($unTitreProjet)
	{
	  
		$this->titreProjet = $unTitreProjet;
		
	}
	
	public function setAdresse($uneAdresse)
	{
	  
		$this->adresse = $uneAdresse;
		
	}
	
	public function setAdministrateur($unAdministrateur)
	{
	  
		$this->administrateur = $unAdministrateur;
		
	}
	
	public function setMailContact($unMailContact)
	{
	  
		$this->mailContact = $unMailContact;
		
	}
	
	public function setDescriptionPoste($uneDescriptionPoste)
	{
	  
		$this->descriptionPoste = $uneDescriptionPoste;
		
	}
	
}