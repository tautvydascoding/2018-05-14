
<!DOCTYPE html>

<?php
  include("head.php");
 ?>

 <?php
   include("header.php");
  ?>

  <?php
    include("main.php");
   ?>

   <?php
     include("footer.php");
    ?>


        <?php
          //paprasto masyvo kurimas
          $darbuotojas = ["Povilas","Povilaitis", 1992];
          //test isvedimas
          print_r( $darbuotojas );
          echo "<br />";

          //kitas isvedimo budas:
          for ($i=0; $i < count($darbuotojas) ; $i++) {
          echo "stalciaus info: $darbuotojas[$i] <br />";
          }

          //asociatyvus masyvas
          $masina = ["pavadinimas"=>"opel", "metai"=>2000,"spalva"=>"raudona"];
          print_r( $masina );
          //                  masyvas stalciaus pavadinimas
          echo "masinos metai: " . $masina["metai"];

          echo "<br />";
          echo "<br />";   //atskirti
          echo "<br />";
          echo "<br />";

          //magija  Mano masyvas  nebutinas-stalciaus pavadinimas    issigalvotas kintamasis
          foreach ($masina as $stalciausPavadinimas => $konkreciamStalciujeIdetaReiksme)
          {
            echo $konkreciamStalciujeIdetaReiksme . "<br />";
            // code...
          }
         ?>























</html>
