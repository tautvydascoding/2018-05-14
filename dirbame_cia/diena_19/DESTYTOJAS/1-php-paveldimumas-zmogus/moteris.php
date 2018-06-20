 <?php
include_once('zmogus.php');

 class Moteris extends Zmogus
 {
      public $estrogenai = 3550;
      function test(){
          echo "Moteris<br />";
      }
      public function printSvoris() {
            echo "svoris: $this->svoris <br /> ";
      }

      public function getSvoris() {
            return $this->svoris;
      }
      public function setSvoris($x) {
            $this->svoris += $x;
      }
 }
