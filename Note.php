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
  
	public function getIdNote() {
	  
		return $this->idNote;
	}
  
	public function getIdMatiere() {
	  
		return $this->idMatiere;
	}	
  
	public function getNoteMax() {
	  
		return $this->noteMax;
	}
  
	public function getNoteEleve() {
	  
		return $this->noteEleve;
	}
  
	public function getTitreDevoir() {
	  
		return $this->titreDevoir;
	}
	
	public function getProfesseur() {
	  
		return $this->professeur;
	}
	
	public function getEleve() {
	  
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