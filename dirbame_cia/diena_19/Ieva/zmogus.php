
<?php

// UZDUOTIS 1:
// sukurti tris klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu

// 'zmogus'  turi: public ugis, protected svoris, private pinigai
// 'moteris' papildomai turi: estrogenai
// 'vyras'   papildomai turi: testosteronai

// UZDUOTIS 2:
// susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju: ugis, svoris, pinigu skaicius, hormono ska
`1icius


// UZDUOTIS 3:
//  atspausdinti visus kintamuosius (NEnaudojant/nesikurti "zmogus"  objekto


class Zmogus {
      public $ugis="999";
      protected $svoris="-1";
      private $pinigai="999";

      public function printPinigai() {
          echo $this->pinigai;
    }

}

class Moteris extends Zmogus {
    public $estrogenai="999";

    public function keiciuSvoris($x) {
      $this->svoris+=$x;
    }

    public function getSvoris() {
        return " $this->svoris";
    }


}


class Vyras extends Zmogus {
    public $testosteronai="999";

    public function keiciuSvoris($x) {
      $this->svoris+=$x;
}
    public function getSvoris() {
        return "$this->svoris";
    }
}
