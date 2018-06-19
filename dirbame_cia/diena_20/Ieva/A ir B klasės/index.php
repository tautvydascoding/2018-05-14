<?php



// UZDUOTIS:
// 1. sukurti dvi klases A ir B
// "B" klase turi paveldi "A"
// "A" klase turi kintamuosius:
// name , plaukuSpalva, sirdiesYda
// kurie yra "public", "private", "protected"

// 2. SUSIKURTI "B" objekta
// 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)

class A {
      public $plaukuSpalva = "raudona";
      private $name = "aldona";
      protected $ligos = "sirdies yda";

      public function printName(){
        echo "Vardas: " . $this->name;
      }


}

class B extends A {
      public function printLigos() {
        echo "Ligos: " . $this->ligos. "<br />";
      }
}

$b1 = new B();

echo "B Plauku spalva- " . $b1->plaukuSpalva. "<br />";

$b1->printName();
echo "<br />";
$b1->printLigos();
