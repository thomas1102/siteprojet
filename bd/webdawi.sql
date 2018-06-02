CREATE DATABASE webDawi;

CREATE TABLE typeUtilisateur (

	idType INT(5),
	libType VARCHAR(50),
	CONSTRAINT typeUtilisateur_pk PRIMARY KEY (idType)
);

CREATE TABLE utilisateur (

	mail VARCHAR(50),
	mdp VARCHAR(50),
	nom VARCHAR(50),
	prenom VARCHAR(50),
	idType INT(5),
	CONSTRAINT utilisateur_pk PRIMARY KEY (mail),
	CONSTRAINT utilisateur_fk FOREIGN KEY (idType)
    REFERENCES typeUtilisateur(idType)
	
);

CREATE TABLE matiere (

	idMatiere INT(11) NOT NULL AUTO_INCREMENT,
	libMatiere VARCHAR(50),
	CONSTRAINT matiere_pk PRIMARY KEY (idMatiere)

);

CREATE TABLE note (

	idNote INT(11) NOT NULL AUTO_INCREMENT,
	idMatiere INT(11),
	noteMax int(5),
	noteEleve int(5),
	titreDevoir VARCHAR(50),
	professeur VARCHAR(50),
	eleve VARCHAR(50),
	CONSTRAINT note_pk PRIMARY KEY (idNote),
	CONSTRAINT professeur_fk FOREIGN KEY (professeur)
    REFERENCES utilisateur(mail),
	CONSTRAINT eleve_fk FOREIGN KEY (eleve)
    REFERENCES utilisateur(mail),
	CONSTRAINT matiere_fk FOREIGN KEY (idMatiere)
    REFERENCES matiere(idMatiere)
	
);


CREATE TABLE posteAlternance (

	idposte INT(11) NOT NULL AUTO_INCREMENT,
	titrePoste VARCHAR(50),
	adresse VARCHAR(50),
	administrateur VARCHAR(50),
	mailContact VARCHAR(50),
	descriptionPoste LONGTEXT,
	CONSTRAINT posteAlternance_pk PRIMARY KEY (idposte),
	CONSTRAINT posteAlternance_fk FOREIGN KEY (administrateur)
    REFERENCES utilisateur(mail)
	

);


CREATE TABLE projetTut (

	idprojet INT(11) NOT NULL AUTO_INCREMENT,
	titreProjet VARCHAR(50),
	adresse VARCHAR(50),
	administrateur VARCHAR(50),
	mailContact VARCHAR(50),
	descriptionPoste LONGTEXT,
	CONSTRAINT projetTut_pk PRIMARY KEY (idprojet),
	CONSTRAINT projetTut_fk FOREIGN KEY (administrateur)
    REFERENCES utilisateur(mail)
	

);

INSERT INTO typeUtilisateur(idType,libType) VALUES (1,'Etudiant');
INSERT INTO typeUtilisateur(idType,libType) VALUES (2,'Entreprise');
INSERT INTO typeUtilisateur(idType,libType) VALUES (3,'Administrateur');
INSERT INTO typeUtilisateur(idType,libType) VALUES (4,'Enseignant');

INSERT INTO Utilisateur(mail,mdp,nom,prenom,idType) VALUES ('pouroucheric@gmail.com','azerty','POUROUCHOTTAMANE','Srivatsa',1);
INSERT INTO Utilisateur(mail,mdp,nom,prenom,idType) VALUES ('dassaultsupport@gmail.com','test','Richard','Simon',2);
INSERT INTO Utilisateur(mail,mdp,nom,prenom,idType) VALUES ('richardkev@gmail.com','azerty','Richard','Kevin',3);
INSERT INTO Utilisateur(mail,mdp,nom,prenom,idType) VALUES ('vincentrenard@gmail.com','azerty','Renard','Vincent',4);

INSERT INTO matiere(idMatiere,libMatiere) VALUES (1,'PHP');
INSERT INTO note(idNote,idMatiere,noteMax,noteEleve,titreDevoir,professeur,eleve) VALUES (1,1,18,16,'Introduction PHP','Vincent','Srivatsa');
















