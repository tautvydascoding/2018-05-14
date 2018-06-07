<?php


define("DB_PAVADINIMAS", "hospital5");
define('DB_VARTOTOJAS', "root");
define("DB_SLAPTAZODIS", "root");
define("DB_HOST", "localhost");


$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );


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
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

    // print_r( $rezultatai);

    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;

}

$gydytojas1 = getDoctor(1);
print_r( $gydytojas1);

if ($gydytojas1 != NULL) {
    echo "h2 NR: " . $gydytojas1['id'] . "</h2>";
    $vardPav =  "<h3>" . $gydytojas1['name'] . "". $gydytojas1['lname'] . "</h3>";
    echo $vardPav;

}

function getPatient( $nr) {
    $manoSQL = "SELECT * FROM patients WHERE id='$nr';";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;

}

$pacientas1 = getPatient(1);
print_r( $pacientas1);

?>
