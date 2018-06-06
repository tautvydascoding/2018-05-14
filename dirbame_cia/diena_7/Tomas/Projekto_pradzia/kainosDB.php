<?php
define('DB_PAVADINIMAS', 'studija');
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

function  getKainos() {
    $manoSQL = "SELECT * FROM kainos";
    $visosKainosObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
    return $visosKainosObjektas;
}
