<?php

    print_r($_GET);
    // print_r($_POST);
    // print_r($GLOBALS);

    $vartotojoVardas = $_GET['vardas'];
    $vartotojoPavarde = $_GET['pavarde'];
    $vartotojoTelefonas = $_GET['telefononumeris'];
    $vartotojoElpastas = $_GET['elpastas'];

    echo "<h2> $vartotojoVardas $vartotojoPavarde </h2>";
    echo "<h3> $vartotojoTelefonas </h3>";


?>

<a href="email:<?= $vartotojoElpastas ?>">susisiekite pastu</a>















    
