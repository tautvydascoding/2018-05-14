

    <?php

      include_once('zmogus.php');

        //visa info nukeliauja i konstruktoriu. 
      $Monika = new zmogus("Monika L.", 165);
      $Petras = new zmogus("Petka P.", 155);
      $Antanas = new zmogus("Untanis L.", 200);

      //var_dump($Monika);
      $Monika->manoVardas();
      $Petras->manoVardas();
      $Antanas->manoVardas();
