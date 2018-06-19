<?php

include ('moteris.php');



// UZDUOTIS 1:
// sukurti tris klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris papildomai turi: estrogenai  = 3450 (public)
// vyras papildomai turi: testosteronai = 9980 (public)

// UZDUOTIS 2:
// susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju: ugis, svoris, pinigu skaicius, hormono skaicius

$Monika = new Moteris;
echo "Moters estrogenai: " . $Monika->estrogenai . " <br />";

echo "Moters ūgis: " . $Monika->ugis=175 . " cm <br />";
$Monika->printSvoris(65);
$Monika->printPinigai(25000);

echo "<br />";

class Vyras extends Zmogus {
    public $testosteronas = "9980";

    public function printSvoris($z) {
      $vyroSvoris = $this->svoris = $z;
      echo "Vyro svoris:" . $vyroSvoris . " kg <br />";
    }
}

$Tadas = new Vyras;
echo "Vyro testosteronas: " . $Tadas->testosteronas . " <br />";
echo "Vyro ūgis: " . $Tadas->ugis=210 . " cm <br />";
$Tadas->printSvoris(95);
$Tadas->printPinigai(35000);
