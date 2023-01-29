
<!-- BOUTON LOG -->
<?php   

if (!isset($_SESSION['idUser'])) { ?>
    <li class="btnNavLi"><button type="button" class="btnNav waves-effect btn modal-trigger" href="#login">Login</button></li>

<?php } else { ?>
    <li class="btnNavLi"><a class="btnNav waves-effect btn modal-trigger" href="../action/logOut.php">Out</a></li>
<?php } ?>




