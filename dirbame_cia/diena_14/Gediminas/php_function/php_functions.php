<?php


define("DB_PAVADINIMAS", "hospital5");
define('DB_VARTOTOJAS', "root");
define("DB_SLAPTAZODIS", "root");
define("DB_HOST", "localhost");


$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );

if ($prisijungimas == true) {
    echo "Prisijungete prie DB sekmingai! <br />";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error() ." <br />";
}

function getPrisijungimas() {
    global $prisijungimas;



        if ($prisijungimas == true) {
            echo "Prisijungete prie DB sekmingai! <br />";
            return $prisijungimas;
        } else {
            echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error() ." <br />";
            return NULL;
        }
}



function getDoctor( $nr ) {
    $manoSQL = "SELECT * FROM doctors WHERE id='$nr'; ";
    $rezultatai = mysqli_real_query(getPrisijungimas(), $manoSQL);

    // print_r( $rezultatai);

    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;

}

$gydytojas1 = getDoctor(4);
print_r( $gydytojas1);



?>
