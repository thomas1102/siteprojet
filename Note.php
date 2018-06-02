<?php

class note  // Présence du mot-clé class suivi du nom de la classe.

{

  private $idNote ;
  private $idMatiere ;
  private $noteMax ;
  private $noteEleve ;
  private $titreDevoir ;
  private $professeur ;
  private $eleve ;
  
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
  
	public getIdNote() {
	  
		return $this->idNote;
	}
  
	public getIdMatiere() {
	  
		return $this->idMatiere;
	}	
  
	public getNoteMax() {
	  
		return $this->noteMax;
	}
  
	public getNoteEleve() {
	  
		return $this->noteEleve;
	}
  
	public getTitreDevoir() {
	  
		return $this->titreDevoir;
	}
	
	public getProfesseur() {
	  
		return $this->professeur;
	}
	
	public getEleve() {
	  
		return $this->eleve;
	}
  
  
	public function setIdNote($unIdNote)
	{
	  
		$this->idNote = $unIdNote;
		
	}
  
    public function setIdMatiere($unidMatiere)
	{
	  
		$this->idMatiere = $unidMatiere;
		
	}
	
	public function setNoteMax($unenoteMax)
	{
	  
		$this->noteMax = $unnoteMax;
		
	}
	
	public function setNoteEleve($unnoteEleve)
	{
	  
		$this->noteEleve = $unnoteEleve;
		
	}
	
	public function setTitreDevoir($untitreDevoir)
	{
	  
		$this->titreDevoir = $untitreDevoir;
		
	}
	
	public function setProfesseur($unprofesseur)
	{
	  
		$this->professeur = $unprofesseur;
		
	}
	
	public function setEleve($uneleve)
	{
	  
		$this->eleve = $uneleve;
		
	}

}