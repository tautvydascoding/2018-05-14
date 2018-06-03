<?php
    define('DB_PAVADINIMAS', 'hospital5');
    define('BD_VARTOTOJAS', 'root');
    define('BD_SLAPTAZODIS', 'root');
    define('BD_HOST', 'localhost');

    $prisijungimas = mysqli_connect(BD_HOST, BD_VARTOTOJAS, BD_SLAPTAZODIS, DB_PAVADINIMAS);

function getPrisijungimas() {
    global $prisijungimas;//pasiima global reiksme
    //====================
    if ($prisijungimas == true) {
        echo "<br>";
        return $prisijungimas;//grazina reiksme i funkcija
    }else {
        echo "ERROR nepavyko prisijungti prie DB " . mysqli_connect_error() . "<br>";
        return NULL;
    }
    //==================

}
getPrisijungimas();



//gydytojo paemimas is DB
function getDoctor($nr) {
    if (!is_numeric($nr)) {
        return NULL;//jei ivestas ne skiacius grazina NULL ir nutruakia funkcija
    }
    $manoSql = "SELECT * FROM doctors WHERE id='$nr'; ";//'$nr' su viengubomis kabutemis veikaia kingtamasis
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSql);//ivykdo sql koda arba kalba, grizta NYSQL OBJEKTAS

    if (mysqli_num_rows($rezultatai) > 0) {
        $rezultatai = mysqli_fetch_assoc($rezultatai);//sita komanda paima sekancios eilutes duomenis, grizta MTSQL ARRAY
        return $rezultatai;
    } else {
        echo "ERROR!! gydytojo nr:  $nr neradome. Bandykite kita <br>"
            .mysqli_error(getPrisijungimas());
        return NULL;
    }
}

$gydytojas1 = getDoctor(2);// php masyvas
// print_r($gydytojas1);
//
// echo "<h2> $gydytojas1[name] </h2>";
// echo "<h2> $gydytojas1[lname] </h2>";

// php neuzsidaro-------------------------------------------------------
