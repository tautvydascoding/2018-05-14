<?php
define('DB_PAVADINIMAS', 'hospital5');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

 $prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
mysqli_set_charset($prisijungimas, "utf8");

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
function getDdarbuotoja($nr){
$manoSQL = "SELECT * FROM darbuotojai WHERE id='$nr';";
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL );
//  paima sekancia eilute (ir pavercia i array)
$rezultatai = mysqli_fetch_assoc($rezultatai);
return $rezultatai;
// print_r($rezultatai);
if (mysql_num_rows($rezultatai) > 0) {
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;

}else {
    echo "ERROR! Darbotojo nr: $nr neradome. Bandykite kita <br />" . mysqli_error($prisijungimas());
    return NULL;
}
}
