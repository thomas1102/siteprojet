<!doctype html>
<html lang="en">
<?php
require 'connexion.php';
require 'Database.php';

$co=connexion();

$db = new Database($co);
?>

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
  

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="3f59c312-7fdc-4cff-b655-ca54db6a4f9b.png" width="110" height="110" alt="">
          
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="connexion.html">Connexion
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inscription.html">Inscription</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

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
<br><br><br>
<div class="container">
    
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 align="center" class="h1 mb-3 ">Ajouter une note</h1>
      <br>
<div class="form-group">
  <label for="sel1">Choisir élève :</label>
  
  <?php
			$eleves = $db->getListUtilisateur();
	?>
  
  <select class="form-control" name="listEleve" id="sel1">
    <?php
	while($donnees = $eleves->fetch())
        {
	?>
    <option><?php echo $donnees['nom'];?></option>
	<?php
        } 	
    ?>
	
	
    
  </select>
</div>
    <div class="form-group">
  <label for="sel1">Choisir matière </label>
  
  <?php
	$matieres=$db->getListMatiere();
  ?>
  <select class="form-control" name="listMatiere" id="sel1">
	<?php
	while($donnees = $matieres->fetch())
        {
	?>
    <option><?php echo $donnees['libMatiere'];?></option>
	<?php
        }
	?>
  
    
  </select>
</div>  

       <input type="text" id="TitreDevoir" class="form-control" placeholder="Titre du devoir" required >
      <br>
      <input type="text" id="Note" class="form-control" placeholder="Note/20" required  >
      <br>
      
      
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ajoutez la note</button>
      <!--<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>-->
    </form>
    <br><br><br><br>

</div>


</div>
</div>
<footer class="footer">
      <div class="container">
      
      </div>
    </footer>



    <!-- /.container -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
   
  
</html>