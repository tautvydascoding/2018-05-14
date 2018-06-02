<?php

define('DB_PAVADINIMAS', 'blog');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

function getPrisijungimas () {
  global $prisijungimas;

  if ($prisijungimas == true) {
      echo "Jūs prisijungėte prie DB sėkmingai.<br/>";
      return $prisijungimas;

  } else {
    echo "Klaida: nepavyko prisijungti" . mysqli_connect_error() . "</br/>";
  }
return NULL;

}
getPrisijungimas();



function getAuthor($nr) {
  $manoSQL = "SELECT * FROM straipsniai WHERE id = '$nr';";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);


  if (mysqli_num_rows($rezultatai)>0) {
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  }  else {
     echo "ERROR Autoriaus nr:" . $nr. "neradome. Bandykite kita <br/>". mysqli_error(getPrisijungimas());
     return NULL;
   }
}
$autorius1 = getAuthor(1);
print_r($autorius1);
