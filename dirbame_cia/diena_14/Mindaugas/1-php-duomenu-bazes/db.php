<?php

define('DB_pavadinimas', 'hospital5');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect(DB_HOST,DB_VARTOTOJAS,DB_SLAPTAZODIS,DB_pavadinimas);



function getPrisjungimas() {
  global $prisijungimas; //paimama globali reiksme

  if ($prisijungimas == true) {
    echo "prisijungete sekmingai <br />";
    return $prisijungimas;
  } else {
    echo "ERROR: nepavyko prisijungti pries DB" . mysqli_connect_error() . "<br />";
    return NULL;
  }
}
getPrisjungimas();

//paimam gydytojo duomenis
function getDoctor($nr){
  $manoSQL = "SELECT * FROM doctors WHERE id='$nr' ";
  $rezultatai = mysqli_query(getPrisjungimas(),$manoSQL); //ivygdo sql koda, reikia patvirtinti, kad esi adiminas su getprisijungimas(grizta mysql objektas)


  if (mysqli_num_rows($rezultatai) > 0) {
  $rezultatai = mysqli_fetch_assoc($rezultatai); // paima sekanti duomeni is viso saraso, kuo daugiau leidi tuo toliau ima pavercia i array

  return $rezultatai;
} else {
  echo "ERROR!! Gydytojo nr: $nr neradom. Bandykite dar karta<br />" . mysqli_error(getPrisjungimas());
    return NULL;
}
}
$gydytojas1 = getDoctor(4);
print_r($gydytojas1);

// php neuzsidaro, jei neplanuoji rasyti html
