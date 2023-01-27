<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Portfolio</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen">
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  </head>
  <body>

    <!-- NAVBAR -->
    <?php
      $page = "accueil";
      require "components/navbar.php";
    ?>

    <!-- SECTION 1 PARALLAX -->
    <?php
      $page = "project1";
      require "components/parallax.php";
    ?>
    
    <!-- PAGE PRINCIPALE -->
    <div class="container">

      <?php 
      $sql = "SELECT * FROM projects WHERE idProject = :idProject";
      $pre = $pdo->prepare($sql);
      $pre->bindParam('idProject', $_GET['id']);
      $pre->execute();
      $data = $pre->fetch(PDO::FETCH_ASSOC);

      $nb = "#".$data["idProject"];
      $title = $data["title"];
      $professor = "professor: ".$data['professor'];
      $imgA = $data["imgA"];
      $imgB = $data["imgB"];
      $descriptionA = $data["descriptionA"];
      $descriptionB = $data["descriptionB"];
      ?>
 
      <h2><?php echo $nb." ".$title ?></h2>
      <h3><?php echo $professor ?></h3>
      <div class="row">
        <div class="animate__animated animate__bounceInLeft project-card col s12 m6 l6">
          <img src="<?php echo $imgA ?>" alt="<?php echo $title ?>">
        </div>
        <div class="animate__animated animate__bounceInRight project-card col s12 m6 l6">
          <p><?php echo $descriptionA ?>"</p>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="animate__animated animate__bounceInRight project-card col s12 m6 l6">
            <p><?php echo $descriptionB ?>"</p>
          </div>  
          <div class="animate__animated animate__bounceInRight project-card col s12 m6 l6">
            <img src="<?php echo $imgB?>" alt="<?php echo $title?>">
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php 
      $page = "project2";
      require "components/footer.php"
    ?>

    <!--JavaScript at end of body for optimized loading-->

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/ab22e0bef1.js" crossorigin="anonymous"></script>
  </body>
</html>