<?php

class posteAlternance  // Présence du mot-clé class suivi du nom de la classe.

{

  private $idposte  ;
  private $titrePoste  ;
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

	public function getIdposte() {

		return $this->idposte;
	}

	public function getTitrePoste() {

		return $this->titrePoste;
	}

	public function getAdresse() {

		return $this->adresse;
	}

	public function getAdministrateur() {

		return $this->administrateur;
	}

	public function getMailContact() {

		return $this->mailContact;
	}

	public function getDescriptionPoste() {

		return $this->descriptionPoste;
	}



	public function setIdposte($unIdposte)
	{

		$this->idposte = $unIdposte;

	}

    public function setTitrePoste($unTitrePoste)
	{

		$this->titrePoste = $unTitrePoste;

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
