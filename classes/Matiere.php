<?php

class matiere // Présence du mot-clé class suivi du nom de la classe.

{

  private $idMatiere  ;
  private $libMatiere  ;

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
  
	public getIdMatiere() {
	  
		return $this->idMatiere;
	}
  
	public getLibMatiere() {
	  
		return $this->libMatiere;
	}	
  
	public function setIdMatiere($unidMatiere)
	{
	  
		$this->idMatiere = $unidMatiere;
		
	}
	
	public function setLibMatiere($unlibMatiere)
	{
	  
		$this->libMatiere = $unlibMatiere;
		
	}

}