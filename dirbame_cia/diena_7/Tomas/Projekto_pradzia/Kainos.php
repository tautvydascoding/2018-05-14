


<?php
include('header.php');
    require_once('kainosDB.php');

    // print_r($visuGydytojuOjektas);

    $visosKainosObjektas = getKainos();
    // paimama sekanti gydytoja
     $kaina = mysqli_fetch_assoc( $visosKainosObjektas );
    while( $kaina ) {
        if ($kaina['kaina'] % 10 == 0) {

            echo "<h2>". $kaina['laikotarpis'] . " " . $kaina['kaina'] . "Eurų" . "</h2>";
        }else {

            echo "<h2>". $kaina['laikotarpis'] . " " . $kaina['kaina'] . "Eurai" . "</h2>";
        }

        $kaina = mysqli_fetch_assoc( $visosKainosObjektas );  // !!!!
    }

include('footer.php');
