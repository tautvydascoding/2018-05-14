<?php
include 'zmogus.php';

class Vyras extends Zmogus {

  public function printPusryciai(){
    echo "Pusryčiai:" . $this->pusryciai. "<br />";
  }

  public function getTestosteronas () {
    echo "Testosterono kiekis: ". $this->testosteronas. "<br />";
  }

  public function setTestosteronas ($x) {
    $this->testosteronas = $x;
  }

}
