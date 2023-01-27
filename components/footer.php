<?php
$link = "img/".$page.".jpg";

?>

<!-- SECTION 1 VIDE -->
<div class="section">
  <div class="container"></div>
</div>
<!-- SECTION 2 PARALLAX -->
<div class="parallax-container">
  <div class="parallax"><img src= "<?php echo $link ?>" alt="<?php echo $page ?>" ></div>
</div>
<footer>
    <div class="container">
        <div class="row">
          <!-- COLONNE 1 -->
          <div class="col s12 m4 l4">
            <div class="container">
              <h2 class="name">Amandine VIALLE-GUERIN</h2>
              <h3 class="subtitle">Student at GUARDIA</h3>
            </div>
            <div class="container">
              <h2 class="name">Ozan SAHIN</h2>
              <h3 class="subtitle">Student at GUARDIA</h3>
            </div>
            
            
          </div>
          
          <!-- COLONNE 2 -->
          <div class="col s12 m4 l4 container">
            <ul id="footer-list">
              <li><a href="index.html">Home</a></li>
              <li><a href="presentation.php">Ozan</a></li>
              <li><a href="presentation.php">Amandine</a></li>
              <li><a href="projects.php">Projects</a></li>
            </ul>
          </div>

          <!-- COLONNE 3 -->
          <div class="col s12 m4 l4 container">
            <form id="contact" action="action/contact.php" method="post">
              <input type="email" name="email" placeholder="email"></input>
              <textarea type="text" name="message" placeholder="message"></textarea>
              <button id="send" name="send" type="submit" class="btnNav waves-effect waves-light btn modal-trigger">Send</button>
            </form>
          </div>
        </div>
        <div id="copyright" class="container">
          <p>© juste_ozan & avg38. All Right Reserved<span id="reverse" onclick="reverse()"> Reverse</span></p>
        </div>  
    </div>
</footer>