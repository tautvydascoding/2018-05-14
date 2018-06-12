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



// ENT_QUOTES - koduos ir dvigubas kabutes

function createDoctor($name, $lname) {

  $uzkoduotasVardas = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
  $uzkoduotaPavarde = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');

    $manoSQL = "INSERT INTO doctors
                          VALUES ('', '$uzkoduotasVardas', '$uzkoduotaPavarde')";

    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);

        if (!$arPavyko) {
            echo "Klaida: nepavyko sukurti gydytojo". mysqli_error(getPrisijungimas());
        }
      }
        // createDoctor("Jurgis", "Jurgaitis");

/// FUNKCIJA DELETE

function deleteDoctor($nr) {
  $uzkoduotasNumeris = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8');
    $manoSQL = "DELETE FROM doctors
                    WHERE id='$nr'
                    LIMIT 1";
      $arTriname = mysqli_query(getPrisijungimas(), $manoSQL);


      }

// deleteDoctor(5);


function editDoctor($nr, $name, $lname) {
      $uzkoduotasNumeris = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8');
      $uzkoduotasVardas = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
      $uzkoduotaPavarde = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');

      $manoSQL = "UPDATE doctors SET
                                    name = '$uzkoduotasVardas',
                                    lname = '$uzkoduotaPavarde'
                          WHERE id = '$uzkoduotasNumeris'
                          LIMIT 1";
      $arKeiciame = mysqli_query(getPrisijungimas(), $manoSQL);
      }
    // editDoctor(4, "Litas", "Ona");


// paimame visus daktarus iš DB
    function getDoctors() {
          // $uzkoduotasNumeris = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8');
          // $uzkoduotasVardas = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
          // $uzkoduotaPavarde = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');
          //
          $manoSQL = "SELECT * FROM doctors LIMIT 200";
          $visiGydytojaiObjektas = mysqli_query(getPrisijungimas(), $manoSQL);
          return $visiGydytojaiObjektas; // GRĄŽINAME ne masyvą, bet objektą.
          }



        $allDoctors =   getDoctors();
        // is objekte laikomų visų gydytojų paimame VIENĄ sekantį gydytoją ir paverčiame jo duomenis masyvu
        $gydytojas1=mysqli_fetch_assoc($allDoctors);
        print_r($gydytojas1);

        $gydytojas1=mysqli_fetch_assoc($allDoctors);
        print_r($gydytojas1);
