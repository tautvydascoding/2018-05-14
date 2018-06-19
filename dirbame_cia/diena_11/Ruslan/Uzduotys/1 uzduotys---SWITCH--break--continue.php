 <!-- PASIZIURETI KAS YRA PHP, js "Switch" -->
 
 
 <?php
   // UZDUOTIS  "Switch"
  // paduoti varda ir Jeigu jis lygus:
  // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
  // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
  // "opel" - atspausdinti "Susimastykite apie naujus priedus"


  // switch ($kintamasis){
  //   case "avinas":   //Jeigu $kintamasis = avinas
  //     echo "avinas  =" . $kintamasis . "<br>";
  //     break; //Butina nutraukti koda po kiekvienos salygos
  //   case "Jautis":
  //     echo "Jautis = $kintamasis </br>";
  //     break;
  //   defaut: //Jeigu neranda reikalingos reiksmes
  //     echo "Tokio zodiako zenklo nera";
  //     break;
  // }
  
  $auto = "Opel";
  $auto = strtolower($auto);
  switch ($auto){
    case "audi":
      echo "Susimastykite apie variklio prieziura";
      break;
    case "bmw":
      echo "Susimastykite apie greiti ir vairavimo kultura";
      break;
    case "opel":
      echo "Susimastykite apie naujus priedus";
      break;
  }


?>