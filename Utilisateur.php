<?php

class utilisateur // Présence du mot-clé class suivi du nom de la classe.

{

  private $mail;
  private $mdp;
  private $nom;
  private $prenom;
  private $idType;
  
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
  
	public function getMail() {
	  
		return $this->mail;
	}
  
	public function getMdp() {
	  
		return $this->mdp;
	}	
  
	public function getNom() {
	  
		return $this->nom;
	}
  
	public function getPrenom() {
	  
		return $this->prenom;
	}
  
	public function getIdType() {
	  
		return $this->idType;
	}
  
  
	public function setNom($unNom)
	{
	  
		$this->nom = $unNom;
		
	}
  
    public function setPrenom($unPrenom)
	{
	  
		$this->prenom = $unPrenom;
		
	}
	
	public function setMail($unmail)
	{
	  
		$this->mail = $unmail;
		
	}
	
	public function setMdp($unMdp)
	{
	  
		$this->mdp = $unMdp;
		
	}
	
	public function setIdType($unType)
	{
	  
		$this->idType = $unType;
		
	}

}