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
      $page = "admin1bb";
      require "components/parallax.php";
    ?>

    <!-- <div class="container">
    </div> -->
    <!-- GESTION UTILISATEUR -->
    <h1 id="users"><strong>List of users </strong><a id="listUser" class="btnAdmin waves-effect btn modal-trigger" href="#signUp"><span style="font-size:15px;">+</span> Add</a></h1>
    
    <!-- RECUP DONEE -->
    <table id="panelAdmin" class="container responsive-table highlight centered">
      <thead>
        <tr>
          <th>#id</th>
          <th>Admin</th>
          <th>Pseudo</th>
          <th>email</th>
          <th>phone</th>
          <th>adress</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM users";
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $user){?>
        <tr>
          <td><?php echo "#".$user['idUser']; ?></td>
          <td><?php echo $user['admin']==1?"Oui":"Non"; ?></td>
          <td><?php echo $user['pseudo']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><?php echo $user['phone']; ?></td>
          <td><?php echo $user['adress']; ?></td>
          <td>
            <form action="action/switchAdmin.php" method="post">
              <input type="hidden" name="idUser" value="<?php echo $user['idUser'] ?>">
              <input type="hidden" name="admin" value="<?php echo $user['admin']==1?0:1?>">
              <button name="switch" type="submit" class="switch container btnAdmin waves-effect btn modal-trigger">Swi</button>
            </form>
          </td>
          <td>
            <form action="action/deleteUser.php?id=<?php echo $user['idUser']?>" method="post">
              <button name="delete" type="submit" class="del container btnAdmin waves-effect btn modal-trigger">Del</button>
            </form>
          </td>
          <td>
            <button type="button" class="btnForm waves-effect btn modal-trigger" href="#modifyUser">Modify</button>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <div id="modifyUser" class="modal">
      <div class="modal-content">
        <form method="post" action="action/modifyUser.php">
          <input type="text" name="pseudo" placeholder="Pseudo">
          <input type="text" name="email" placeholder="email">
          <input type="text" name="phone" placeholder="Phone">
          <input type="text" name="adress" placeholder="Adress">
          <button type="submit" class="btnForm waves-effect btn modal-trigger" href="#modify">Modify</button>     
        </form>
      </div>
    </div>  

    <div class="section">
    </div>

    <?php
      $page = "admin2b";
      require "components/parallax.php";
    ?>
    
    <h1 id="projects">
      <strong>Liste of projects </strong>
    </h1>

    


    <div class="container">
      <ul class="collapsible popout">
        <?php
        $sql = "SELECT * FROM projects";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $projects = $pre->fetchALL(PDO::FETCH_ASSOC);

        foreach($projects as $project){ ?>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">filter_drama</i>
            <?php echo $project['title']." (with ".$project['professor'],")"; ?>
          </div>
          <div class="collapsible-body">
            <span>
              <div class="row">
                <img class="col s12 m6 l6" src="<?php echo substr($project['imgA'],3); ?>" >
                <p class="col s12 m6 l6"><?php echo $project['descriptionA']; ?></p>
              </div>
              <div class="row">
                <p class="col s12 m6 l6"><?php echo $project['descriptionB']; ?></p>
                <img class="col s12 m6 l6" src= "<?php echo substr($project['imgB'],3); ?>" >
              </div>
            </span>
            <form method="post" action="action/deleteProject.php?id=<?php echo $project['idProject']?>">
              <button name="deleteProject" type="submit" class="del container btnAdmin waves-effect btn modal-trigger">Del</button>
            </form>
            <button type="button" class="btnForm waves-effect btn modal-trigger" href="#modifyProject">Modify</button>          
          </div>
        </li>
        <?php } ?>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">add</i>Add Project
          </div>
          <div class="collapsible-body">
            <span>
              <form method="post" id="formProject" action="action/addProject.php" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="title">
                <input type="text" name="professor" placeholder="professor">
                <textarea type="text" name="descriptionA" placeholder="description 1"></textarea>
                <textarea type="text" name="descriptionB" placeholder="description 2"></textarea>
                <input type="file" name="imgA">
                <input type="file" name="imgB">
                <button id="listUser" class="btnAdmin waves-effect btn modal-trigger" type="submit" name="addProject"><span style="font-size:15px;">+</span> Add</button>
              </form>
            </span>
          </div>
        </li>
      </ul>
    </div>
    <div id="modifyProject" class="modal">
      <div class="modal-content">
        <form method="post" action="action/modifyProject.php">
          <input type="text" name="title" placeholder="title">
          <input type="text" name="professor" placeholder="professor">
          <input type="file" name="imgA">
          <input type="file" name="imgB">
          <textarea type="text" name="descriptionA" placeholder="description 1"></textarea>
          <textarea type="text" name="descriptionB" placeholder="description 2"></textarea>
          <button name="modifyProject" type="submit" class="del container btnAdmin waves-effect btn modal-trigger">Modify</button>
        </form>
      </div>
    </div>  



    <!-- FOOTER -->

    <?php 
      $page = "admin3b";
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