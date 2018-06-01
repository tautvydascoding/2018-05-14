<?php

 define('DB_PAVADINIMAS', 'hospital5');
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

// function createDoctor($vardas, $pavarde){
// // saugumas: uzkoduoja spec. simbolius ""'' \n \t <>
//   // $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
//   // $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);
//
//   $uzkoduotasvardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
//   $uzkoduotaspavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8');
//
//   $manoSQL = " INSERT INTO doctors
//                             VALUES ('','$uzkoduotasvardas','$uzkoduotaspavarde');
//                             ";
//                             // echo $manoSQL;
//                             $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
//                             if($arPavyko == false){
//                               echo "ERROR" . mysqli_error(getPrisijungimas());
//                             }else{
//                               echo "pavyko";
//                             }
// }

// createDoctor("Povilas","Povilauskas");


//trynimas
// function deleteDoctor($nr){
//   $manoSQL = "DELETE FROM doctors
//               WHERE id='$nr'
//               ";
//               mysqli_query(getPrisijungimas(), $manoSQL);
// }
//  deleteDoctor(15);

 // function editeDoctor($nr, $vardas, $pavarde){
 //
 //   $uzkoduotasvardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
 //   $uzkoduotaspavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8');
 //   $uzkoduotasNR = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8');
 //    $manoSQL = "UPDATE doctors SET
 //                              name = ' $uzkoduotasvardas',
 //                              lname = '$uzkoduotaspavarde'
 //                          WHERE id = '$uzkoduotasNR'
 //                          LIMIT 1
 //                  ";
 //
 //   mysqli_query(getPrisijungimas(), $manoSQL);
 //
 // }
 // editeDoctor(6,"Tau222tvis","Tautv222");

 function getDoctors(){
   $manoSQL = "SELECT * FROM doctors";
   $visiGyditojaiObjektas = mysqli_query(getPrisijungimas(), $manoSQL);
   return $visiGyditojaiObjektas;
 }
$visiDaktarai = getDoctors();
// is objekto paleidzia po viena gydytoja
$gydytojas1Masyvas = mysqli_fetch_assoc($visiDaktarai);
print_r($gydytojas1Masyvas);

// php neuzsidaro
