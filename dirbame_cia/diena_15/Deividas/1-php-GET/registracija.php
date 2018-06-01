
<?php

 // echo "aa";
 // print( "aa");
 // print_r("aa");
 // printf("aaa %s", "a11");    seip prisimint
 // var_dump("aaa");
 // die("aa");


print_r($_GET);
print_r($_POST);
//print_r($GLOBALS)

 $GLOBALS['TAUTVYDAS'] = "slaptazodis";
 $vartotojoVardas = $_GET['vardas'];
 $vartotojoPavarde = $_GET['pavarde'];
 $vartotojoElPastas = $_GET['elPastas'];
 $vartotojoTel = $_GET['tel.'];




 echo "<h2> $vartotojoVardas $vartotojoPavarde </h2>";

 if (true) {
   echo "<script type='text/javascript'>
      console.log('jau suveikiau');
   </script>";
 }
