<?php


define("DB_PVADINIMAS", "hospital5");
define("DB_VARDAS", "root");
define("DB_SLAPTAZODIS", "root");
define("DB_HOST", "localhost");

$prisijungimas = mysqli_connect(DB_HOST , DB_VARDAS , DB_SLAPTAZODIS , DB_PVADINIMAS);

function getPrisijungimas() {
  global $prisijungimas;

  if ($prisijungimas == true) {
    return $prisijungimas;
  }else {
    echo "ERROR neprisijungete prie DB!!! : " . mysqli_connect_error() . "<br />";

    return NULL;
  }
}
getPrisijungimas();

//paima gydytojo duomenis

function getDoctor ($nr) {

  $manoSQL = "SELECT * FROM doctors WHERE id= '$nr';  ";
  $resultatai = mysqli_query(getPrisijungimas(), $manoSQL); //ivykdo SQL koda

  //mysqli_fetch_assoc - paima sekancia eilute
  $resultatai = mysqli_fetch_assoc($resultatai);

  // print_r($resultatai); // jeigu reikia atspauzdint
  return $resultatai; // grazina duomenis
}

$gydytojas1 = getDoctor(4); //php masyvas
print_r($gydytojas1);
$gydytojas2 = getDoctor(2); //php masyvas
$gydytojas3 = getDoctor(1); //php masyvas
$gydytojas4 = getDoctor(3); //php masyvas

$gydytojas5 = getDoctor(500);
print_r($gydytojas5);

function getDoctor2 ($nr2) {

  $manoSQL2 = "SELECT * FROM doctors WHERE id= '$nr2';  ";
  $resultatai2 = mysqli_query(getPrisijungimas(), $manoSQL2); //ivykdo SQL koda

  if (mysqli_num_rows($resultatai2) > 0 ) {
    $resultatai2 = mysqli_fetch_assoc($resultatai2);
    return $resultatai2;
  }else {
    echo "Gydytojo nera <br />" . mysqli_error(getPrisijungimas());
    return NULL;
  }

}

$gydytojas6 = getDoctor1(500);
print_r($gydytojas6);




//php neuzsidaro
