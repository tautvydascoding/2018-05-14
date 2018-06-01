<?php

define('DB_PAVADINIMAS', 'hospital5');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

function getPrisijungimas() {
  global $prisijungimas; //paiimama global reiksme - pirmas budas

      if ($prisijungimas == true) {
        // echo "Jūs prisijungėte prie DB sėkmingai! <br />";
        return $prisijungimas;
      } else {
          echo "Klaida : nepavyko prisijungti prie DB" . mysqli_connect_error() ."<br />";
      }

  return NULL;

  }
    getPrisijungimas();


// function getPrisijungimas22() {
//   $x = $_GLOBALS['prisijungimas']; //antras budas
//   echo $x;
// }
// getPrisijungimas22();

// PHP neuždarome, nes daugiau html čia nebus tik PHP

// uzduotis sukurti funkcija kad paimtu gydytojo duomenis



function getDoctor($nr) {
    $manoSQL = "SELECT * FROM doctors WHERE id = '$nr';  ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

        if (mysqli_num_rows($rezultatai)>0) {
          $rezultatai = mysqli_fetch_assoc($rezultatai); // paima sekancia eilute ir pavercia i masyva
          return $rezultatai;

        } else {
          // // echo "ERROR Gydytojo nr:" . $nr. "neradome. Bandykite kita <br/>"
          //         . mysqli_error(getPrisijungimas());
          return NULL;
        }

    // print_r($rezultatai); //negraziai duomenis grazina
}
$gydytojas1 = getDoctor(3); //turi is duomenu bazes grazinti antro gydytojo masyva
print_r($gydytojas1);



function getPatient($x) {
    $mano_SQL = "SELECT * FROM patients WHERE id = '$x'; ";
    $rezultatai1 = mysqli_query(getPrisijungimas(), $mano_SQL);

    if (mysqli_num_rows($rezultatai1)>0) {
        $rezultatai1 = mysqli_fetch_assoc($rezultatai1);
        return $rezultatai1;
    

    } else {
      return NULL;
    }
    // print_r($rezultatai1);
}


$pacientas1 = getPatient(4);
print_r($pacientas1);
