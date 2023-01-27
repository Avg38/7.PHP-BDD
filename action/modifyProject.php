<?php
  //connection au serveur
  //sélection de la base de données:
  require "../cfg/config.php";
  require "../action/checkAdmin.php";
 
  //récupération des valeurs des champs:
  $idProject = $_POST["idProject"] ;
  $title = $_POST["title"] ;
  $imgA = $_POST["imgA"] ;
  $imgB = $_POST["imgB"] ;
  $descrA = $_POST["descriptionA"] ;
  $descrB = $_POST["descriptionB"] ;
  $professor = $_POST["professor"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE projects
            SET title = '$title',
		        imgA = '$imgA',
		        imgB = '$imgB',
		        descrA = '$descrA',
                descrB = '$descrB',
                professor = '$professor'
                    WHERE idProject  = '$idProject' ";
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql) or die(mysql_error());
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>