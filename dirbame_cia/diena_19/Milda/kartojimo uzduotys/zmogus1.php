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

        <!-- // UZDUOTIS 1:
        // sukurti tris klases: zmogus ir moteris ir vyras
        // moteris paveldi zmogu ir vyras paveldi zmogu
        // 'zmogus'  turi: public ugis, protected svoris, private pinigai
        // 'moteris' papildomai turi: estrogenai
        // 'vyras'   papildomai turi: testosteronai




<?php


class Zmogus {
public $ugis = -99;
protected $svoris = -15;
private $pinigai = -566;
public function printpinigai() {
  echo "pinigai $this->pinigai <br />";
  }
}

// printpinigai();




class Moteris extends Zmogus {
  public $estrogenai = 3550;
public function printstats() {
echo "ugis $this->ugis <br />";
echo "svoris $this->svoris <br />";
echo "estrogenai $this->estrogenai <br />";
}
}




class Vyras extends Zmogus {
  public $testosteronai = 8600;
  public function printstats(){
  echo "ugis $this->ugis <br />";
  echo "svoris $this->svoris <br />";
  echo "testosteronai $this->testosteronai <br />";
}
}



$Monika = new Moteris();

$Monika->printstats();


$Tadas = new Vyras();


var_dump($Monika);
var_dump($Tadas);







 ?>


















        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
