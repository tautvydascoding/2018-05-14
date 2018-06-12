


      <?php


                // UZDUOTIS 1:
                // sukurti  klase: 'zmogus'
                // zmogus turi:
                // private ugis,
                // private vardas
                // public f-ja 'manoUgis()'
                // public f-ja 'manoVardas()'



        class Zmogus {
            private $vardas = "bevardis"; // nurodomas tipas, pvz string
            private $ugis = -999; // kintamiesiems nurodome public, private, gali buti =-999, galima is viso nedeti lygybes pvz $ugis;

            public function manoVardas() {
              echo "Vardas: $this->vardas <br />";
            }

            public function __construct($x, $y) {
                $this->vardas = $x;
                $this->vardas = $y;
            }

}
