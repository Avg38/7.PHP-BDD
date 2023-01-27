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

    <!-- SECTION 1 PARALLAX -->
    <?php
      $page = "pre1";
      require "components/parallax.php";
    ?>

    <!-- SECTION 2 TITRE -->
    <div class="section">
      <div class="container">
        <p id="about-me" class="animate__animated animate__pulse">About me</p>
      </div>
    </div>
    <?php 
      $sql = "SELECT * FROM presentations WHERE idPresentation = :idPresentation";
      $pre = $pdo->prepare($sql);
      $pre->bindParam('idPresentation', $_GET['id']);
      $pre->execute();
      $data = $pre->fetch(PDO::FETCH_ASSOC);

      $nb = "#".$data["idPresentation"];
      $name = $data["namePresentation"];
      $description = $data['descriptionPresentation'];
      $img = $data["imgPresentation"];
    ?>

    <!-- SECTION 3 PRESENTATION -->
    <div id="about-me-container" class="container">
      <div class="row">

        <!-- INFO -->
        <div class="col s12 m6 l6">
          <h2 class="main_name"><?php echo $name ?></h2>
          <h3>Student at Guardia</h3>
          <p><?php echo $description ?></p>
        </div>


        <!-- IMAGE -->
        <div class="col s12 m6 l6">
          <img class="img" src= "<?php echo $img ?>" alt="<?php echo $name ?>">
        </div>
        
        
      </div>
    </div>

    <!-- SKILLS -->
    <div id="skills-container" class="container">
      <h3>Skills</h3>
      <div class="row">
        
        <!-- COLONNE 1 -->
        <div class="col s12 m6 l6">
          <div class="row">

            <!-- COL 1 -->
            <div class="col s2 m2 l2">
              <i class="skills-icone small fa-solid fa-code"></i>
            </div>

            <!-- COL 2 -->
            <div class="col s10 m10 l10">
              <h4 class="skills-title">Frontend Developper</h4>
            </div>

            <!-- COL 3 -->
            <div class="col s12 m12 l12">
              <h5 class="skills-subtitle">Nearly 2 years</h5>
            </div>
            <div class="col s12 m12 l12">
              <ul class="skills-list">
                <li>HTML</li>
                <li>
                  <div class="progress">
                    <div class="determinate" style="width: 95%"></div>
                  </div>
                </li>
                <li>CSS</li>
                <li>
                  <div class="progress">
                    <div class="determinate" style="width: 80%"></div>
                  </div>
                </li>
                <li>JS</li>
                <li>
                  <div class="progress">
                    <div class="determinate" style="width: 40%"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- COLONNE 2 -->
        <div class="col s12 m6 l6">
          <div class="row">

            <!-- COL 1 -->
            <div class="col s2 m2 l2">
              <i class="skills-icone small fa-solid fa-language"></i>
            </div>

            <!-- COL 2 -->
            <div class="col s10 m10 l10">
              <h4 class="skills-title">Languages</h4>
            </div>

            <!-- COL 3 -->
            <div class="col s12 m12 l12">
              <h5 class="skills-subtitle">Nearly 8 years</h5>
            </div>
            <div class="col s12 m12 l12">
              <ul class="skills-list">
                <li>Anglais</li>
                <li>
                  <div class="progress">
                    <div class="determinate" style="width: 90%"></div>
                  </div>
                </li>
                <li>Espagnol</li>
                <li>
                  <div class="progress">
                    <div class="determinate" style="width: 20%"></div>
                  </div>
                </li>
                <li>Corréen</li>
                <li>
                  <div class="progress">
                    <div class="determinate" style="width: 10%"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    


    <!-- FOOTER -->
    <?php 
      $page = "pre2";
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