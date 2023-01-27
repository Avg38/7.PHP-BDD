<?php
require "../cfg/config.php";
require "../action/checkAdmin.php";

$title = $_POST['title'];

$descriptionA = $_POST['descriptionA'];
$descriptionB = $_POST['descriptionB'];

$imgA = $_FILES['imgA'];
$imgB = $_FILES['imgB'];
$destinationImgA = "../img/".$_FILES['imgA']['name']; //dossier "upload"
$destinationImgB = "../img/".$_FILES['imgB']['name'];
move_uploaded_file($_FILES['imgA']['tmp_name'],$destinationImgA);
move_uploaded_file($_FILES['imgB']['tmp_name'],$destinationImgB);


$professor = $_POST['professor'];


$sql = "INSERT INTO projects (title, descriptionA, descriptionB, imgA, imgB, professor) 
VALUES (:title, :descriptionA, :descriptionB, :imgA, :imgB, :professor)";
        

//$stmt = $conn->query("SELECT id FROM projects ORDER BY id DESC LIMIT 1");
//$result = $stmt->fetch();
//$projectId = $result['id'] + 1;

$pre = $pdo->prepare($sql);

$images = ["imgA", "imgB"];

$pre->bindParam("title", $title);

$pre->bindParam("descriptionA", $descriptionA);
$pre->bindParam("descriptionB", $descriptionB);

$pre->bindParam("imgA", $destinationImgA);
$pre->bindParam("imgB", $destinationImgB);

$pre->bindParam("professor", $professor);

$pre->execute();

header('Location: ../admin.php');

?>
