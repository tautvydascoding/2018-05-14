<?php
class Zmogus{
  public $ugis = 0;
  protected $svoris = 0;
  private $pinigai =0;

  public function printPinigaiVyro($x){
    $vyroPinigai = $this->pinigai += $x;
    echo 'Pinigai: ' . $vyroPinigai . '<br />';
  }
  public function printPinigaiMoters($y){
    $motersPinigai = $this->pinigai += $y;
    echo 'Pinigai: ' . $motersPinigai . '<br />';
  }
}

class Vyras extends Zmogus
{
  public $testosteronai = 250;

  public function printSvorisVyro($x){
    $motSvoris = $this->svoris += $x;
    echo 'Svoris: ' . $motSvoris . '<br />';
  }
}
class Moteris extends Zmogus
{
  public $estrogenai = 300;

  public function printSvorisMoters($y){
    $vyrSvoris = $this->svoris += $y;
    echo 'Svoris: ' . $vyrSvoris . '<br />';
  }
}

$Monika = new Moteris;
$Monika->ugis = 180;
echo 'Ugis: ' . $Monika->ugis . '<br />';

$Monika->printSvorisMoters(55);
echo $Monika->printPinigaiMoters(20000) . '<br />';

$Tadas = new Vyras;
$Tadas->ugis = 190;
echo 'Ugis: ' . $Tadas->ugis . '<br />';

$Tadas->printSvorisVyro(95);
echo $Tadas->printPinigaiVyro(3000);
