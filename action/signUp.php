<?php 
include("../cfg/config.php");


// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Récupérez les données du formulaire
  $pseudo = $_POST['pseudo'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  // Validez les données du formulaire
  if (empty($pseudo) || empty($email)) {
    echo "Veuillez entrer un nom d'utilisateur ou un email";
  }
  else if (empty($password)) {
    echo "Veuillez entrer un mot de passe";
  }
  else if ($password != $confirmPassword) { 
    echo "Les mots de passe ne correspondent pas";
  }
  else {

    // Hash le mot de passe
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);  

    // Récupérez les données du visiteur à l'aide de l'adresse IP
    $adresse_ip = $_SERVER['REMOTE_ADDR'];

    // Enregistrez les données dans la base de données
    $pre = $pdo->prepare("INSERT INTO users (pseudo,email,password) VALUES (:pseudo,:email,:password)");
    $pre->bindParam('pseudo', $pseudo);
    $pre->bindParam('email', $email);
    $pre->bindParam('password', $passwordHash);
    $pre->execute();
    $rowCount = $pre->rowCount();

    // Redirigez l'utilisateur vers la page de connexion
    header('Location: ../index.php');
    
    exit();
  }
} ?>
<!-- FONCTIONNEL -->
<!-- FIN -->