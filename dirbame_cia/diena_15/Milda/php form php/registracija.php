<?php

prinr_r($_GET);
prinr_r($_POST);
// prinr_r($_GLOBALS);

// $_GLOBALS['MILDA'] = "slaptazodis";

$VartotojoVardas = $_GET['vardas'];
$VartotojoPavarde = $_GET['pavarde'];
$VartotojoElPastas = $_GET['elpastas'];
$VartotojoTelefonas = $_GET['telefonas'];
echo "<h2> $VartotojoVardas </h2>";
echo "<h4> $VartotojoPavarde  </h4>";
echo "<h4> $VartotojoElPastas  </h4>";
echo "<h4> $VartotojoTelefonas  </h4>";


<a href="tel:<?=$VartotojoTelefonas ?>">
  tel: +370  <?=$VartotojoTelefonas ?>
  </a>


  <a href="email:<?=$VartotojoElPastas ?>">
    Susisiekti el. pastu  <?=$VartotojoElPastas ?>
    </a>











// php neuzdarome
