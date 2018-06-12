<?php

define('DB_PAVADINIMAS', 'ievaprojektas');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

/* PRISIJUNGIMAS PRIE DUOMENŲ BAZĖS*/
$prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

mysqli_set_charset($prisijungimas, "utf8");

function getPrisijungimas () {
  global $prisijungimas;

        if ($prisijungimas == true) {
            // echo "Jūs prisijungėte prie DB sėkmingai.<br/>";
            // return $prisijungimas;

        } else {
          echo "Klaida: nepavyko prisijungti" . mysqli_connect_error() . "</br/>";
        }
      return NULL;
}
getPrisijungimas();


/* FUNKCIJA GAUTI BLOGO STRAIPSNIO PAVADINIMĄ TITLE */
// function getTitle($nr) {
//   $manoSQL = "SELECT * FROM blog WHERE id = '$nr';";
//   $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
//
//
//   if (mysqli_num_rows($rezultatai)>0) {
//     $rezultatai = mysqli_fetch_assoc($rezultatai);
//     return $rezultatai;
//   }  else {
//      echo "ERROR Straipsnio pavadinimo nr:" . $nr. "nerastas. Bandykite dar kartą <br/>". mysqli_error(getPrisijungimas());
//      return NULL;
//    }
// }
// $title1 = getTitle(1);
// print_r($title1);

// /* FUNKCIJA GAUTI BLOGO STRAIPSNIO TURINĮ/TEKSTĄ PAGAL ID NR */
// function getDescription($nr) {
//   $manoSQL = "SELECT * FROM blog WHERE id = '$nr';";
//   $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
//
//
//   if (mysqli_num_rows($rezultatai)>0) {
//     $rezultatai = mysqli_fetch_assoc($rezultatai);
//     return $rezultatai;
//   }  else {
//      echo "ERROR Straipsnio pavadinimo nr:" . $nr. "nerastas. Bandykite dar kartą <br/>". mysqli_error(getPrisijungimas());
//      return NULL;
//    }
// }
// $description1 = getDescription(1);
// print_r($description1 = getDescription(1);
//
// /* FUNKCIJA GAUTI BLOGO STRAIPSNIO DATĄ*/
// function getData($nr) {
//   $manoSQL = "SELECT * FROM blog WHERE id = '$nr';";
//   $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
//
//   if (mysqli_num_rows($rezultatai)>0) {
//     $rezultatai = mysqli_fetch_assoc($rezultatai);
//     return $rezultatai;
//   }  else {
//      echo "ERROR Straipsnio pavadinimo nr:" . $nr. "neradome. Bandykite dar kartą <br/>". mysqli_error(getPrisijungimas());
//      return NULL;
//    }
// }
// $date1 = getData(1);
// print_r($date1 = getData(1);
//
//
// /* BLOGO STRAIPSNIO ANTRAŠTĖS IR DATOS KOREGAVIMAS UPDATE */
//
// function editBlog ($nr, $title, $description, $date, $image) {
//
//   $uzkoduotasNumeris = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8');
//   $uzkoduotaAntraste = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
//   $uzkoduotasTekstas = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
//   $uzkoduotaData = htmlspecialchars($date, ENT_QUOTES, 'UTF-8');
//   $uzkoduotasImage = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');
//
//   $manoSQL="UPDATE blog  SET
//                     title = '$uzkoduotaAntraste',
//                     description = '$uzkoduotasTekstas',
//                     date = '$uzkoduotaData',
//                     image = '$uzkoduotasImage'
//                   WHERE id = '$uzkoduotasNumeris'
//                   LIMIT 1;
//             "
//
//             $arKeiciame=mysqli_query(getPrisijungimas(), $manoSQL);
//
// }
//
// $blogNew = editBlog (1, "Nauja antraste", "Lorem ipsum incididunt ut labore et dolore magna aliqua. Ut quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
// print_r($blogNew);

function  getAllBlog() {
    $manoSQL = "SELECT * FROM blog LIMIT 200";
    $visiBlogObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
    return $visiBlogObjektas;

  }

    $visasBlog =   getAllBlog();

    $blogMasyvas1 = mysqli_fetch_assoc(   $visasBlog   );
     print_r( $blogMasyvas1  );

    $blogMasyvas2 = mysqli_fetch_assoc(   $visasBlog   );
      print_r( $blogMasyvas2  );

    $blogMasyvas3 = mysqli_fetch_assoc(   $visasBlog   );
       print_r( $blogMasyvas3  );
