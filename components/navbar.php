<?php require "cfg/config.php"; ?>
<?php 
  $sql = "SELECT * FROM projects";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $projects =  $pre->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php 
$sql = "SELECT * FROM presentations";
$pre = $pdo->prepare($sql);
$pre->execute();
$presentations =  $pre->fetchAll(PDO::FETCH_ASSOC); 
?>
<!-- BOUTON LISTE PROJET -->
<ul id="dropdown1" class="drop dropdown-content">
  <?php foreach($projects as $project) { ?>
    <li><a href="projects.php?id=<?php echo $project['idProject'] ?>"><?php echo $project['title'] ?></a></li>
  <?php } ?>
</ul>
<!-- BOUTON LISTE QUAND FORMAT PETIT -->
<ul id="dropdown2" class="drop dropdown-content">
  <li><a href="index.php">Home</a></li>
  <?php foreach($presentations as $presentation) { ?>
        <li><a href="presentation.php?id=<?php echo $presentation['idPresentation'] ?>"><?php echo $presentation['namePresentation'] ?></a></li>
        <?php } ?>
</ul>
<ul id="dropdown3" class="drop dropdown-content">
  <li><a href="index.php">Home</a></li>
  <?php foreach($presentations as $presentation) { ?>
        <li><a href="presentation.php?id=<?php echo $presentation['idPresentation'] ?>"><?php echo $presentation['namePresentation'] ?></a></li>
        <?php } ?>
</ul>
<nav class="tranparent">
  <div class="row nav-wrapper tranparent">
    <div class="col m3 l2 tranparent hide-on-med-and-down">
      <h1 class="animate__animated animate__bounce" id="title">Portfolio</h1>
    </div>
    <div id="list" class="col s12 m9 l8 transparent">
      <ul class="hide-on-large-only transparent">
        <li><a class="waves-effect dropdown-trigger" data-target="dropdown2" href="#!">More<i class="material-icons right hide-on-small-only">arrow_drop_down</i></a></li>
        <li><a class="waves-effect dropdown-trigger" href="#!" data-target="dropdown3">Projects<i class="material-icons right hide-on-small-only">arrow_drop_down</i></a></li>
        <?php require "components/buttonLog.php" ?>
        <?php require "components/admin.php" ?>
      </ul>
      <ul class="right tranparent hide-on-med-and-down">
        <li><a class="waves-effect" href="index.php">Home</a></li>
        
        <?php foreach($presentations as $presentation) { ?>
        <li><a href="presentation.php?id=<?php echo $presentation['idPresentation'] ?>"><?php echo $presentation['namePresentation'] ?></a></li>
        <?php } ?>
        <!-- Dropdown Trigger -->
        <li><a class="waves-effect dropdown-trigger" href="#!" data-target="dropdown1">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
        <!-- Modal Trigger -->
        
        <?php require "components/buttonLog.php" ?>
        <?php require "components/admin.php" ?>
      </ul>
    </div>
  <!-- Modal Structure -->
  <div id="login" class="modal">
    <div class="modal-content">
      <form action="action/login.php" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo"/>
        <input type="password" name="password" placeholder="password"/>
        <button type="submit" name="login" class="btnForm waves-effect btn modal-trigger">Login</button>
        <button type="button" name="signUp" class="btnForm waves-effect btn modal-trigger" href="#signUp">Sign Up</button>
      </form>
    </div>
  </div>  
  <div id="signUp" class="modal">
    <div class="modal-content">
      <form method="post" action="action/signUp.php">
        <input type='text' name='pseudo' placeholder="Pseudo"/>
        <input type='email' name='email' placeholder="Email"/>
        <input type='text' name='phone' placeholder="Phone"/>
        <input type='text' name='adress' placeholder="Adress"/>
        <input type='password' name='password' placeholder="Password"/>
        <input type='password' name='confirmPassword' placeholder="Confirm Password"/>
        <button type="submit" name="signUp" class="btnForm waves-effect btn modal-trigger">Sign Up</button>
      </form>
    </div>
  </div>  
    
    <div class="hide-on-small-only col s3 m3 l2">
      <div class="switch">
        <label>
          <i class="material-icons hide-on-small-only">brightness_5</i>
          <input onclick="myFunction()" type="checkbox">
          <span class="lever"></span>
          <i class="material-icons hide-on-small-only">brightness_2</i>
        </label>
      </div>
    </div>
  </div>
</nav>