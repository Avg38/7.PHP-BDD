<?php
if (isset($_SESSION['idUser'])) { 
    if ($_SESSION['admin'] == 1){?>
        <li class="btnNavLi"><a class="btnNav waves-effect btn modal-trigger" href="admin.php">Admin</a></li>
        <?php }
  } ?>
