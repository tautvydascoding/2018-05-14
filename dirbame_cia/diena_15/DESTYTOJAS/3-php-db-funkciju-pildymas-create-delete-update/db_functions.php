<?php

 // visa info apie php
 // phpinfo( );

//  // exprot using terminal
// C:\MAMP\bin\mysql\bin\mysqldump.exe -u root -p 'hospital1' > "C:\Users\User\Documents\Projektas\uzduotys\MAMP\diena_15\mano_DB.sql"
//
// C:\xampp\mysql\bin\mysqldump.exe -u root -p hospital10 > "C:\Users\info\Documents\Projektai\uzduotys\MAMP\diena_15\Elvinas\doctors_DB\mano_DB.sql"
//
// //import using terminal
// C:\MAMP\bin\mysql\bin\mysql.exe -u root -p 'hospital1' < "C:\Users\User\Documents\Projektas\uzduotys\MAMP\diena_15\mano_DB.sql"


 define('DB_PAVADINIMAS', 'hospital5');
 define('DB_VARTOTOJAS', 'root');
 define('DB_SLAPTAZODIS', 'root');
 define('DB_HOST', 'localhost');

$prisijungimas =  mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

// nustatom mysql'ui   utf8 koduotę
// kad kai jis paims is DB duomenis - neuzkoduotu kazkaip kitaip
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

function createDoctorPaprasta($vardas, $pavarde) {
    $manoSQL = " INSERT INTO doctors
                        VALUES ('', '$vardas', '$pavarde');
               ";
    $arPavyko  = mysqli_query(getPrisijungimas(), $manoSQL);
}

function createDoctor($vardas, $pavarde) {
    // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
    // $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    // $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);

    // geresnis
    // ENT_QUOTES- kad uzkoduotu ir dvigubas kabutes
    $uzkoduotasVardas =  htmlspecialchars( $vardas, ENT_QUOTES, 'UTF-8' );
    $uzkoduotasPavarde = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );

    $manoSQL = " INSERT INTO doctors
                        VALUES ('', '$uzkoduotasVardas', '$uzkoduotasPavarde');
               ";

    $arPavyko  = mysqli_query(getPrisijungimas(), $manoSQL);

    if ($arPavyko == false) {
    // if ($arPavyko != true) {
    // if (!$arPavyko) {
        echo "ERROR: nepavyko sukurti Gydytojo" . mysqli_error(getPrisijungimas());
    }
}

// createDoctor("Povilas", "Povilaitis");

function deleteDoctor($nr) {
    $uzkoduotasNR = htmlspecialchars( $nr, ENT_QUOTES, 'UTF-8' );

    $manoSQL = "DELETE FROM doctors
                       WHERE id='$uzkoduotasNR'
               ";
    mysqli_query(getPrisijungimas() ,   $manoSQL );
}
 // deleteDoctor(11);

 function  editeDoctor($nr, $vardas, $pavarde) {
      $uzkoduotasNR = htmlspecialchars( $nr, ENT_QUOTES, 'UTF-8' );
      $uzkoduotasVardas = htmlspecialchars( $vardas, ENT_QUOTES, 'UTF-8' );
      $uzkoduotasPavarde = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );

     $manoSQL = "UPDATE doctors SET
                                      name  = '$uzkoduotasVardas',
                                      lname = '$uzkoduotasPavarde'
                                WHERE id = '$uzkoduotasNR'
                                LIMIT 1
                ";
    mysqli_query(getPrisijungimas() , $manoSQL);
 }
 // paimame VISUS gygytojus is DB
 function  getDoctors() {
     $manoSQL = "SELECT * FROM doctors";
     $visiGydytojaiObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
     return $visiGydytojaiObjektas;
 }

// paimam visus gydytojus
$visiDaktarai =   getDoctors();
// is objekte laikomu VISU gydytoju - paimame SEKANTI VIENA gydytoja (idedam i masyva)
 $gydytojas1Masyvas = mysqli_fetch_assoc(   $visiDaktarai   );
 print_r( $gydytojas1Masyvas  );

 $gydytojas2Masyvas = mysqli_fetch_assoc(   $visiDaktarai   ); 
 print_r( $gydytojas2Masyvas  );




// php neuzsidaro
