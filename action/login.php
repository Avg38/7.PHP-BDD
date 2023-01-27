<?php 

// CLEAN USERNAME
$formUsername = $_POST['pseudo'];
$cleanUsername = htmlspecialchars($formUsername, ENT_QUOTES, 'UTF-8');

// CLEAN MDP
$formPassword = $_POST['password'];
$cleanPassword = htmlspecialchars($formPassword, ENT_QUOTES, 'UTF-8');

require_once "../cfg/config.php"; 

// SQL
$sql = "SELECT * FROM users WHERE pseudo = :pseudo";
$pre = $pdo->prepare($sql);
$pre->bindParam('pseudo', $_POST['pseudo']);
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

// CONDITION
if (password_verify($formPassword, $user['password'])) {
    create_session($user, $cleanUsername);
} else {
    $_SESSION['error'] = "Vous n'êtes pas connecté, adresse mail ou mot de passe incorrect.";   
}

function create_session($user, $cleanUsername)
{
    $_SESSION['idUser'] = $user['idUser'];
    $_SESSION['pseudo'] = $cleanUsername;
    $_SESSION['email'] = $user['email'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['error'] = "Vous n'êtes pas connecté, adresse mail ou mot de passe incorrect.";
    $_SESSION['success'] = "Vous êtes connecté!";
    header('Location: ../index.php');
}
?>