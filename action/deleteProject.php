<?php
require "../cfg/config.php";
require "../action/checkAdmin.php";


$sql = "DELETE FROM projects WHERE idProject = :idProject";
$pre = $pdo->prepare($sql);
$pre->bindParam("idProject", $_GET['id']);
$pre->execute();

header('Location: ../admin.php');
?>
