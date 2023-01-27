<?php
if (isset($_SESSION['user'])) { 
    if ($_SESSION['user']['admin'] == 1){?>
        <a id="addProject" class="btnAdmin waves-effect btn modal-trigger" href="action/addProject.php">Add</a> 
        <?php }
  } ?>