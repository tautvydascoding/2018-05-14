<?php

 define('DB_PAVADINIMAS', 'hospital6');
 define('DB_VARTOTOJAS', 'root');
 define('DB_SLAPTAZODIS', 'root');
 define('DB_HOST', 'localhost');

$prisijungimas =  mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

mysqli_set_charset($prisijungimas, "utf8"); // !!! utf8 - be bruksnelio


function getPrisijungimas() {
    global $prisijungimas; // paiimama global reiksme

    if ($prisijungimas == true) {
        return $prisijungimas;
    } else {
        echo "ERRROR: nepavyko Prisijungete prie DB:"
                    . mysqli_connect_error() . " <BR />";
        return NULL;
    }
}

// paimam  gydytojo duomenis is DB
function getDoctor( $nr ) {
    // apsauga - ar paduotas skaicius
    if ( !is_numeric($nr) ) {
        return NULL;
    }
    //                                           '$nr'
    $manoSQL = "SELECT * FROM doctors   WHERE id='$nr';   ";
    //  mysqli_query -  ivykdo SQL koda  ( grista mysql Objektas)
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

    // ar radome kazka lenteleje
    if (mysqli_num_rows($rezultatai) > 0 ) {
        // mysqli_fetch_assoc - paima sekancia eilute (ir pavercia i Array)
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
    } else {
        echo "ERROR!!!! Gydytojo nr: $nr neradome. Bandykite kita<BR /> "
                . mysqli_error(getPrisijungimas());
        return NULL;
    }
}

// $gydytojas1 = getDoctor(3); // php masyvas
// print_r( $gydytojas1 ) ;


// php neuzsidaro
function createDoctor($name, $lname){
// ENT_QUOTES ir dvigubas kabutes
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); // IDEA: uzkoduota '"
$lname = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8'); // IDEA: uzkoduota

    $manoSQL  = "INSERT INTO doctors
                        VALUES ('','$name', '$lname');
                ";

$arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
if ($arPavyko == false){
    echo "ERROR: nepavyko sukurti Gydytojo" . mysqli_error(getPrisijungimas());
}else {
    echo "Pavyko";
}
}
 // createDoctor("Povilas", "Povilaitis");

// /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

function deleteDoctor($nr){
$manoSQL = "DELETE FROM doctors
                    WHERE id='$nr'
                    LIMIT=1
                    ";
                    mysqli_query(getPrisijungimas(), $manoSQL);
}
// deleteDoctor(12);

function editDoctor($nr, $name, $lname){
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $lname = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');
    $nr = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8');
$manoSQL = "UPDATE doctors SET
                    name = '$name',
                    lname = '$lname'
                    WHERE id ='$nr'
                    ";
                    mysqli_query(getPrisijungimas(), $manoSQL);
}

// editDoctor(12, "Undefined", "Povilaitis");

function getDoctors(){
$manoSQL = "SELECT * FROM doctors";
$visiGydytojai = mysqli_query(getPrisijungimas(), $manoSQL); // NOTE: $visiGydytojai yra objektas

return $visiGydytojaiMasyvas;
}

// paimam visus gydytojus
$visiDaktarai = getDoctors();
// is objekte laikomu VISU gydytoju - paimame VIENA gydytoja (idedam i masyva)
$gydytojasM = mysqli_fetch_assoc($visiDaktarai);
print_r($gydytojasM);
// php neizsidaro
