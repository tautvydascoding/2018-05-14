

    <?php

      include_once('zmogus.php');

        //objekto kurimas
      $Monika = new zmogus();
      $Juozas = new zmogus();
      $Kestas = new zmogus();
      $Monika->vardas = "Monika";
      $Monika->ugis = 188;
      $Juozas->vardas = "Juozulis";
      $Juozas->ugis = 199;
      $Kestas->vardas = "Kestas";
      $Kestas->ugis = 210;
      //var_dumb( $Monika ); //test

        //objekto duomenu isvedimas
      echo "Merginos vardas: $Monika->vardas <br />";
      echo "Merginos ugis: $Monika->ugis <br />";
      echo "Vyro vardas: $Juozas->vardas <br />";
      echo "Vyro ugis: $Juozas->ugis <br />";
      echo "Vyro vardas: $Kestas->vardas <br />";
      echo "Vyro ugis: $Kestas->ugis <br />";

      $Juozas->einu(); // f-jos isvedimas
