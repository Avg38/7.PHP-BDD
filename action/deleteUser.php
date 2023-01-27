<?php
require "../cfg/config.php";
require "../action/checkAdmin.php";
       
$sql = "DELETE FROM users WHERE idUser = :idUser";
$pre = $pdo->prepare($sql);
$pre->bindParam("idUser", $_GET['id']);
$pre->execute();

header('Location: ../admin.php');
?>
