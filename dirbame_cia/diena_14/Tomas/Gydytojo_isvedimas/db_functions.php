<?php
// prisijungimas prie DB
define('DB_PAVADINIMAS', 'hospital5');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

 $prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

mysqli_set_charset($prisijungimas, "utf8");

// function getPrisijungimas(){
// $x = $GLOBALS['prisijungimas'];
// echo $x;
// }
 function getPrisijungimas(){
 global $prisijungimas;
 if ($prisijungimas==true) {
     // echo "Prisijungete prie DB sekmingai! <br />";
     return $prisijungimas;
     }
 else {
     echo "ERROR: napavyko prisijungti prie DB:" . mysqli_connect_error() . "<br />";
     return NULL;
 }
}

getPrisijungimas();


// paimam gydytojo duomenis
function getDoctor($nr){
$manoSQL = "SELECT * FROM doctors WHERE id='$nr';";
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL );
//  paima sekancia eilute (ir pavercia i array)
$rezultatai = mysqli_fetch_assoc($rezultatai);
return $rezultatai;
 // print_r($rezultatai);
 if (mysql_num_rows($rezultatai) > 0) {
     $rezultatai = mysqli_fetch_assoc($rezultatai);
     return $rezultatai;

 }else {
     echo "ERROR! Gydytojo nr: $nr neradome. Bandykite kita <br />" . mysqli_error($prisijungimas());
     return NULL;
 }
}
$gydytojas1 = getDoctor(3);

// print_r($gydytojas1) ;

function getPatient($nr){
    $manoSQL = "SELECT * FROM patients WHERE id='$nr';";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL );
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    // print_r($rezultatai);
    return $rezultatai;
     }
     $patient1 = getPatient(4);
     $patient2 = getPatient(5);
     // print_r($patient1);
     // print_r($patient2);





// php neizsidaro
