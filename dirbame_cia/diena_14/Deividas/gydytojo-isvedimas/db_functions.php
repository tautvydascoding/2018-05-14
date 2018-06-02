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

//paimam gydytojo duomenis is Db
function getDoctor($nr) {
  $manoSQL = "SELECT * FROM doctors  WHERE id='$nr'; ";
  // mysqli_query - ivygdo SQL koda (grizta mysql objektas)
  $rezultatai = mysqli_query (getPrisijungimas(), $manoSQL ); // ivygdo SQL koda
  //print_r($rezultatai);

  //ar radome kazka lenteleje
  if (mysqli_num_rows($rezultatai) > 0 ) {
    // mysqli_fetch_assoc - paima sekanti duomeni-eilute(grista ir pavercia i array)
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  } else {
    echo "ERRRRROR!!!!!!! gydytojo nr: $nr neradome. Bandykite kita <br />"
              . mysqli_error(getPrisijungimas());
    return NULL;
  }
  //print_r($rezultatai);
}

//$gydytojas1 = getDoctor(3); // php masyvas

//print_r($gydytojas1);















 //php neuzsidaro
