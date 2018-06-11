<!doctype html>
<?php
session_start();
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>LP MIAW DAWI</title>

  </head>
<body>

	<?php

		if (isset($_SESSION['mail']) ) {

			require 'co.php';


		}

		else {

			require 'deconnexion.php';
			echo "non ok";

		}

	?>



    <!-- Page Content -->
    <div align="center">
      <img class="baniere" src="Banniere-LinkedIn-17.jpg">
    </div>

  <div"class="container-fluid">
 <div class="orange">
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="index.html">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Présentation.html">Présentation du parcours</a>
  </li>

  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Espace entreprise</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="ajout-offre-projet.html">Ajouter un projet tuteuré</a>
              <a class="dropdown-item" href="consult-self-offre-projet.html">Consulter mes projets tuteurés</a>
              <a class="dropdown-item" href="ajout-offre-alternance.html">Ajouter une offre d'alternance</a>
              <a class="dropdown-item" href="consult-self-offre-alternance.html">Consulter mes offres d'alternances</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Espace étudiant</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="note.html">Note</a>
              <a class="dropdown-item" href="edt.html">Emploi du temps</a>
              <a class="dropdown-item" href="consult-offre-projet.html">Projet tuteurés</a>
              <a class="dropdown-item" href="consult-offre-alternance.html">Offres d'alternance</a>
              <a class="dropdown-item" href="support-cours.html">Support de cours</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Espace enseignants</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="ajout-note.html">Ajouter une note</a>
              <a class="dropdown-item" href="consult-note.html">Consulter ses notes déposées</a>
              <a class="dropdown-item" href="edt-perso.html">Emploi du temps personnel</a>
              <a class="dropdown-item" href="ajout-support-cours.html">Ajouter un support de cours</a>
              <a class="dropdown-item" href="consult-self-support-cours.html">Consulter ses supports de cours</a>
            </div>
          </li>
</ul>
</div>
<div align="center" class="">
  <br><br>
  <h2>Bienvenu

   <?php
   if(isset($_SESSION['nom']) && isset($_SESSION['prenom']) ){

     echo $_SESSION['nom']." ".$_SESSION['prenom'];

   }
   else{
     echo "utilisateur";
   }
   ?>
  </h2>
  <p>
    <?php
    if(isset($_SESSION['typeUser'])){
      echo $_SESSION['typeUser'];

    }
    else{
       echo "utilisateur";
    }
    ?>
  </p>
 <h4>Objectif de la formation</h4>

            <h5><span><i class="fa fa-star-o" aria-hidden="true"></i></span></h5>
            <p>Former des jeunes de niveau BAC+2 aux m&eacute;tiers de l&rsquo;Internet et de responsable informatique charg&eacute; de la gestion d&rsquo;un r&eacute;seau local et du d&eacute;veloppement et d&eacute;ploiement de produits et de services Intranet ou / et Internet. Les postes vis&eacute;s sont interm&eacute;diaires entre des techniciens sup&eacute;rieurs et des ing&eacute;nieurs, principalement, orient&eacute;s vers les PME/PMI.<br /><br />Cette formation propose 2 parcours : <br /><br />&nbsp;&nbsp;&nbsp; Parcours ASR2I : Administration et S&eacute;curisation des R&eacute;seaux et services Internet et Intranet.<br />&nbsp;&nbsp;&nbsp; Parcours DAW2I : D&eacute;veloppement avanc&eacute; d&rsquo;Applications web Internet et Intranet.</p>

            <h4>Metiers Vises</h4>
            <h5><span><i class="fa fa-bullseye" aria-hidden="true"></i></span></h5>
            <p>Les postes vis&eacute;s sont interm&eacute;diaires entre des techniciens sup&eacute;rieurs et des ing&eacute;nieurs, principalement, orient&eacute;s vers les PME/PMI :<br /><br />&nbsp;&nbsp;&nbsp; Administrateur de base de donn&eacute;es,<br />&nbsp;&nbsp;&nbsp; Administrateur r&eacute;seau,<br />&nbsp;&nbsp;&nbsp; Analyste d'exploitation,<br />&nbsp;&nbsp;&nbsp; Analyste programmeur,<br />&nbsp;&nbsp;&nbsp; Consultant informatique,<br />&nbsp;&nbsp;&nbsp; Responsable de la maintenance,<br />&nbsp;&nbsp;&nbsp; Responsable informatique.</p>

            <h4>Pre-requis</h4>
            <h5><span><i class="fa fa-check-circle" aria-hidden="true"></i></span></h5>
            <p>Etre titulaire d&rsquo;un BAC + 2 (DUT, L2, BTS, DEUST).<br /><br />La s&eacute;lection se fait sur dossier, tests de connaissances, et &eacute;ventuellement entretien</p>
<p>&nbsp;</p>
<blockquote>
<p>Lien pour candidater (Ouverture le 1er mars 2018) : <a href="https://candidature-lp.iut.univ-evry.fr/_inscription/"><u><span style="color: #000080;">https://candidature-lp.iut.univ-evry.fr/_inscription/</span></u></a></p>
</blockquote>

            <h4>Contact</h4>
            <h5><span><i class="fa fa-phone" aria-hidden="true"></i></span></h5>
            <p>
                <b>IUT d&#039;Evry Val d&#039;Essonne - Département G.E.I.I.</b><br>
                Cours Monseigneur Roméro 91000 EVRY<br>
                Tél.: 01 69 47 72 21<br>

        <footer class="footer">
      <div class="container">

      </div>
    </footer>



</nav>
</div>
</div>


    <!-- /.container -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>


</html>
