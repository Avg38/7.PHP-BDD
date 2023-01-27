<?php
  //connection au serveur
  //sélection de la base de données:
  require "../cfg/config.php";
  require "checkAdmin.php";
 
  //sélection de la base de données:
  
 
  //récupération des valeurs des champs:

  $idUser = $_POST["idUser"] ;
  $pseudo = $_POST["pseudo"] ;
  $email = $_POST["email"] ;
  $phone = $_POST["phone"] ;
  $adress = $_POST["adress"];
  $admin = $_POST["admin"];
 
  //récupération de l'identifiant de la personne:

 
  //création de la requête SQL:
  $sql = "UPDATE users SET pseudo = '$pseudo', email = '$email', phone = '$phone', adress = '$adresse' WHERE idUser = '$idUser'" ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
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