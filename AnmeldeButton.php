<?php

/*

<div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="myLogin.php">
                    
                    Anmelden</a></div>
        </div>


*/
require 'functionFIVE.php';
if (!isset($_SESSION['user'])){
?>

<div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="myLogin.php">
                    
                    Anmelden</a></div>
        </div>

<?php
}
else if (isset($_SESSION['five'])) {
    if ($_SESSION['five'] === true){
        ?>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="myCreatePost.php">
                        
                        Beitrag Erstellen</a></div>
            </div>
    
        <?php
    }
}
else {
    ?>
    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="myCreatePost.php">
                    
                    Warten...</a></div>
        </div>
    <?php
}