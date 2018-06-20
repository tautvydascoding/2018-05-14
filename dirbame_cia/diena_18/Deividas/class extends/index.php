

    <?php

      include_once('vilkas.php');

        $vilkas = new Vilkas();
        echo $vilkas->svoris . "<br />";
        // echo $vilkas->pusryciai . "<br />";
        // echo $vilkas->ligos . "<br />";
        $vilkas-> printLigos();
        $vilkas-> printPusryciai();
