<?php

define('DB_PAVADINIMAS', 'hospital5');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

$PRISIJUNGIMAS = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);




function getPRISIJUNGIMAS() {
  // paimama global reiksme
global $PRISIJUNGIMAS;

if ($PRISIJUNGIMAS == true) {
echo "prisijungete prie db sekmingai! <br/>";
return $PRISIJUNGIMAS;
} else {
  echo "error: nepavyko prisijungti prie db:" . mysqli_connect_error() ." <br />";
  return NULL;
}
}

GETPRISIJUNGIMAS();


// PAIMAM GYDYTOJO DUOMENIS IS DB
function getDoctor($nr) {
$manoSQL = "SELECT * FROM doctors WHERE id='$nr';" ;
  $rezultatai = mysqli_query(GETPRISIJUNGIMAS(), $manoSQL);



if (mysqli_num_rows($rezultatai) > 0)  {
  $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
} else {
  echo "Error!;Gydytojo nr: $nr neradome. Bandykite kita<br />" . mysqli_error(GETPRISIJUNGIMAS());
  return Null;
}



}




// php masyvas
$gydytojas1 = getDoctor(4);
print_r($gydytojas1);














 // nereikia uzdarineti php, jeigu po apacia nieko nera
