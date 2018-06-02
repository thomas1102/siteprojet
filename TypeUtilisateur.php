<?php

class typeUtilisateur // Présence du mot-clé class suivi du nom de la classe.

{

  private $idType ;
  private $libType ;

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
  
	public getIdType() {
	  
		return $this->mail;
	}
  
	public getLibType() {
	  
		return $this->mdp;
	}	
  
	public function setIdType($unType)
	{
	  
		$this->idType = $unType;
		
	}
	
	public function setLibType($unLibType)
	{
	  
		$this->libType = $unLibType;
		
	}

}