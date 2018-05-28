<?php


$nuotraukos = array("1.jpg", "About", "Gallery", "Contact");

?>

<nav>
    <ul>
        <?php
            for ($i=0; $i < 4; $i++) {
                echo "<li>" . $manoMenu[ $i ] . "</li>";
            }

         ?>
    </ul>
</nav>
