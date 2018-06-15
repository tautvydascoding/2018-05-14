 <?php


 class Zmogus
 {
      public $ugis = 196;

      protected $svoris = 66; // lyg pritave , bet paveldimas
      private $pinigai = 0;

      function test(){
          echo "Zmogus<br />";
      }
      public function printPinigai() {
            echo "pinigai: $this->pinigai <br /> ";
      }
 }
