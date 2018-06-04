<?php
// prisijungimas prie DB
define('DB_PAVADINIMAS', 'hospital5');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

 $prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

// nustatome msql utf8 koduote
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



//
// $gydytojas1 = getDoctor();
//
// print_r($gydytojas1) ;

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
$manoAQL = "SELECT * FROM doctors";
$visiGydytojai = mysqli_query(getPrisijungimas(), $manoSQL); // NOTE: $visiGydytojai yra objektas

return $visiGydytojaiMasyvas;
}

// paimam visus gydytojus
$visiDaktarai = getDoctors();
// is objekte laikomu VISU gydytoju - paimame VIENA gydytoja (idedam i masyva)
$gydytojasM = mysqli_fetch_assoc($visiDaktarai);
print_r($gydytojasM);
// php neizsidaro
