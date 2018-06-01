<?php

define('DB_PAVADINIMAS','hospital5');
define('DB_VARDAS','root');
define('DB_SLAPTAZODIS','root');
define('DB_HOST','localhost');

$prisijungimas =  mysqli_connect( DB_HOST, DB_VARDAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );




function getPrisijungimas() {
   global $prisijungimas; //paimam global reiksme

   if ($prisijungimas == true) {
     echo "Prisijungete prie DB sekmingai! <br />";
     return $prisijungimas; // visa prisijungima paims ir grazinst return
   } else {
     echo "ERRROR: nepavyko prisijungti prie DB:" . mysqli_connect_error() . "<br />";
     return NULL;
   }
}

getPrisijungimas();

//$gydytojas1 = getDoctor(3); // php masyvas

 function getPatient($nr) {
   $manoSQL = "SELECT * FROM patients  WHERE id='$nr'; ";
   $rezultatai = mysqli_query (getPrisijungimas(), $manoSQL );
   if (mysqli_num_rows($rezultatai) > 0 ) {
     $rezultatai = mysqli_fetch_assoc($rezultatai);

     return $rezultatai;
   } else {
     echo "ERRRRROR!!!!!!! paciento nr: $nr neradome. Bandykite kita <br />"
               . mysqli_error(getPrisijungimas());
     return NULL;
   }
   //print_r($rezultatai);
 }
 $pacientas1 = getPatient(2);
 $pacientas2 = getPatient(4);

 print_r($pacientas1);
  print_r($pacientas2);

















 //php neuzsidaro
