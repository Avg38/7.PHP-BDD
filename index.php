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

    <!-- PAGE PRINCIPALE -->

    <!-- SECTION 1 -->
    <?php
      $page = "home1";
      require "components/parallax.php";
    ?>

    <!-- RECUP DONNEE + VARIABLE -->
    <?php
    $sql = "SELECT * FROM presentations";
    $pre = $pdo->prepare($sql);
    $pre->bindParam('idPresentation', $_POST['idPresentation']);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);

    $nb = "#".$data["idPresentation"];
    $name = $data["namePresentation"];
    $description = $data['descriptionPresentation'];
    $img = $data["imgPresentation"];
    $insta = $data["instagram"];
    $linkedin = $data["linkedIn"];
    $twitter = $data["twitter"];
    ?>


    <!-- CAROUSEL -->
    <div class="carousel carousel-slider center">
      
      <!-- CAROUSEL (OZAN/AMANDA) -->
      <div class="carousel-item">
        <div class="row">

          <!-- PREMIERE COLONNE INFO-->
          <div class="container">
            <div class="col m6 l6">
              
              <!-- TEXT -->
              <!-- <h2>Ozan SAHIN</h2> -->
              <h2><?php echo $name ?></h2>
              <h3>Student at GUARDIA</h3>
              <p><?php echo $description ?></p>
              
              <!-- TEXT -->
              
              <!-- ICON -->
              <div class="row"> 
                <div class="col s6 m6 l6 container icon1">
                  <div class="row">
                    <div class="col s2 m2 l2">
                      <a href="<?php echo $insta ?>"><i class="small fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="col s2 m2 l2">
                      <a href="<?php echo $linkedin ?>"><i class="small fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <div class="col s2 m2 l2">
                      <a href="<?php echo $twitter ?>"><i class="small fa-brands fa-twitter"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col s6 m6 l6 right">
                  <a class="about-me" href="presentation.php">About Me</a>
                </div>
              </div>
              <!-- FIN ICON -->
            </div>
          </div>
          
          <!-- DEUXIEME COLONNE IMAGE-->
          <div class="col m5 l5">
            <img src="<?php echo $img ?>" alt="<?php echo $name ?>">
          </div>

          <!-- TROISIEME COLONNE BOUTON-->
          <div class="col m1 l1">
            <a id="next"><i class="fa-solid fa-caret-right"></i></a>
          </div>
        </div>
      </div>
      <!-- CAROUSEL AMANDINE -->
      <!-- <div class="carousel-item">
        <div class="row"> -->

          <!-- PREMIERE COLONNE BOUTON-->
          <!-- <div class="col m1 l1">
            <a id="prev"><i class="fa-solid fa-caret-left"></i></a>
          </div> -->

          <!-- DEUXIEME COLONNE IMAGE -->
          <!-- <div class="col m5 l5">
            <img src="img/amandine.png" alt="avg38">
          </div> -->

          <!-- TROISIEME COLONNE INFO -->
          <!-- <div class="container">
            <div class="col m6 l6"> -->
              
              <!-- TEXT -->
              <!-- <h2 class="main_name">Amandine VIALLE-GUERIN</h2>
              <h3>Student at GUARDIA</h3>
              <p>I am a 18 years old student, currently in bachelor at the Guardia School of Lyon, FR</p>
              <p>This school will allow me to train in the various cybersecurity professions.</p> -->
              <!-- TEXT -->
              
              <!-- ICON -->
              <!-- <div class="row">
                <div class="col s6 m6 l6 container icon1">
                  <div class="row">
                    <div class="col s2 m2 l2">
                      <a href="https://www.instagram.com/avg38/"><i class="small fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="col s2 m2 l2">
                      <a href="https://www.linkedin.com/in/amandine-vialle-gu%C3%A9rin-a353a71a0/"><i class="small fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <div class="col s2 m2 l2">
                      <a href="https://twitter.com/Avg974"><i class="small fa-brands fa-twitter"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col s6 m6 l6 right">
                  <a class="about-me" href="presentation.php">About Me</a>
                </div>
              </div> -->
              <!-- ICON -->

            <!-- </div>
          </div> -->

        <!-- </div>
      </div> -->
    </div>
    <!-- FIN CAROUSEL -->
    


    
  
    <!-- FOOTER -->
    <?php 
      $page = "home2";
      require "components/footer.php"
    ?>

    <!--JavaScript at end of body for optimized loading-->

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/ab22e0bef1.js" crossorigin="anonymous"></script>
  </body>
</html>