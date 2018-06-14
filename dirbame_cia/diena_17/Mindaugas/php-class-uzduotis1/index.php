<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>scope</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">

        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">

    </head>

    <body>
        <h1 > Isijunk console </h1>

        <?php

        class Zmogus {
          public $ugis  = 0; // padaromas ruosinys klases
          public $vardas = "";
          function einu(){
            echo "einu, einu <br />";
          }
          }
//jei darytume atsikirame faile, tai rasyti: include_once('zmogus.php'); failo pavadinimas

          $Monika = new Zmogus();
          $Juozas = new Zmogus();//objekto kurimas
          var_dump($Monika); //test...

          echo "<br />";

          $Monika->ugis = 165;
          $Monika->vardas = "Monika";

          $Juozas->ugis = 185;
          $Juozas->vardas = "Juozas";

          echo "Merginos vardas: $Monika->vardas <br />";
          echo "Merginos ugis: $Monika->ugis <br />";

          echo "Vyro vardas: $Juozas->vardas <br />";
          echo "Vyro ugis: $Juozas->ugis <br />";

          echo "klases funkcija:";
           $Juozas->einu();
          echo "<br />";

//uzduotis 2
        class Zmogus2 {
          private $vardas;
          private $ugis;
          public function manoUgis(){
            echo "ugis: $this->ugis";
          }
          public function manoVardas(){
            echo "vardas: $this->vardas";
          } //po funkciju nededami kabliataskai
          public function __construct($x,$y){ //fukncija, kuri ivykta kuriant objekta __construct
            $this->vardas = $x;
            $this->ugis = $y;
          }
        }
// ikelti kintamaji is objekto i funkcija $this->kintamasis

          $Ona = new Zmogus2("Monika L.", 165);
          $Tadas = new Zmogus2("Tadas R.", 176);//objekto kurimas
          var_dump($Ona); //test...



          echo "<br />";
          $Ona->manoVardas();

 // pasikartojimas namuose
          class auto {
            private $marke;
            private $metai;
            public function spaudinimas(){
              echo "apie masina: $this->marke $this->metai <br />"; //po rodykles nededame dolerio, net nezinau kodel
            }
            public function __construct($x, $y){
              $this->marke = $x;
              $this->metai = $y;
            }
          }

          $BMW = new auto("BMW", 2014);

          $BMW->spaudinimas(); //funkciju iskvietime reikia nuroduti is kokio objekto imama funkcija
         ?>








        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
