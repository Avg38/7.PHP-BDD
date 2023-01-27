<?php
require "../cfg/config.php";
require "../action/checkAdmin.php";

$sql = "UPDATE users SET admin = :admin WHERE idUser = :idUser";
$pre = $pdo->prepare($sql);
$pre->bindParam("idUser", $_POST['idUser']); 
$pre->bindParam("admin", $_POST['admin']); 
$pre->execute();

header('Location: ../admin.php');
?>
