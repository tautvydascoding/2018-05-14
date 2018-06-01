<?php

 print_r(  $_GET );
 print_r(  $_POST );
 // print_r(  $GLOBALS );

 // $GLOBALS['TAUTVYDAS'] = "slaptazodis";  // i globasa masyva galima isideti betkokia savo reiksme

 $vartotojoVardas = $_GET['vardas'];
 $vartotojoPavarde = $_GET['pavarde'];
 $vartotojoElPastas = $_GET['elpastas'];
 $vartotojoTel = $_GET['telefonas'];
 echo "<h2> $vartotojoVardas  $vartotojoPavarde </h2>";
 echo "<h4> $vartotojoElPastas </h4>";
 echo "<h4> $vartotojoTel </h4>";

 ?>
 <a href="tel:<?= $vartotojoTel ?>">
    Tel: +370     <?= $vartotojoTel ?>
 </a>
 <a href="email:<?= $vartotojoElPastas ?>">
      Susisiekti pastu:     <?= $vartotojoElPastas ?>
 </a>




<?php
if (true) {
    echo "<script type='text/javascript'>
                alert('jau suveikiau');
          </script>";
}


// echo "aa";
// print("aa");
// print_r("aa");
// printf("aaa %s" , "a11");
// var_dump("aaa");
// die("aa");



// neuzdarome
