


      <?php

      include_once('zmogus.php');


        //UZDUOTIS 2
        // SUKURTI objektus: Monika, Tadas, Kestas

          $Monika = new Zmogus(); // naujo objekto kūrimas
          $Tadas = new Zmogus();
          $Kestas = new Zmogus();

          // var_dump($Monika); // test
          // var_dump($Tadas); // test
          // var_dump($Kestas); // test

          // objekto duomenu keitimas
          $Monika-> vardas = "Monika"; // idejimas i objekta
          $Monika-> ugis = 170;

          $Tadas-> vardas = "Tadas"; // idejimas i objekta
          $Tadas-> ugis = 190;

          $Kestas-> vardas = "Kestas"; // idejimas i objekta
          $Kestas-> ugis = 200;


        //UZDUOTIS 2.1  ATSPAUSDINTI varda ir ugi, paleisti funckija Einu

          echo "Vardas:  $Monika->vardas, ugis: $Monika->ugis  <br />";
          echo "Vardas:  $Tadas->vardas, ugis: $Tadas->ugis  <br />";
          echo "Vardas:  $Kestas->vardas, ugis: $Kestas->ugis  <br />";
