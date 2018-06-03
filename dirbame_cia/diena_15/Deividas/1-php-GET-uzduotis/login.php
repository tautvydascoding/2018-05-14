<?php

 print_r(  $_GET );
 print_r(  $_POST );
 // print_r(  $GLOBALS );

 // $GLOBALS['TAUTVYDAS'] = "slaptazodis";  // i globasa masyva galima isideti betkokia savo reiksme

 $vartotojoUserName = $_GET['vardas'];
 $vartotojopaswword = $_GET['slaptazodis'];
 $vartotojoDate = $_GET['Data'];
 $vartotojoId = $_GET['id'];
 echo "<h2>   $vartotojoUserName </h2>";
 echo "<h4> $vartotojopaswword </h4>";
 echo "<h4> $vartotojoDate </h4>";
 echo "<h4> $vartotojoId </h4>";

 ?>
 <a href="User name:<?= $vartotojoUserName ?>">
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
