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



function getTitle($nr) {
  $manoSQL = "SELECT * FROM blog WHERE id = '$nr';";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);


  if (mysqli_num_rows($rezultatai)>0) {
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  }  else {
     echo "ERROR Straipsnio pavadinimo nr:" . $nr. "neradome. Bandykite dar kartą <br/>". mysqli_error(getPrisijungimas());
     return NULL;
   }
}
$title1 = getTitle(1);
print_r($title1);


function getDescription($nr) {
  $manoSQL = "SELECT * FROM blog WHERE id = '$nr';";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);


  if (mysqli_num_rows($rezultatai)>0) {
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  }  else {
     echo "ERROR Straipsnio pavadinimo nr:" . $nr. "neradome. Bandykite dar kartą <br/>". mysqli_error(getPrisijungimas());
     return NULL;
   }
}
$description1 = getDescription(1);
print_r($description1 = getDescription(1);


function getData($nr) {
  $manoSQL = "SELECT * FROM blog WHERE id = '$nr';";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);


  if (mysqli_num_rows($rezultatai)>0) {
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  }  else {
     echo "ERROR Straipsnio pavadinimo nr:" . $nr. "neradome. Bandykite dar kartą <br/>". mysqli_error(getPrisijungimas());
     return NULL;
   }
}
$date1 = getData(1);
print_r($date1 = getData(1);
