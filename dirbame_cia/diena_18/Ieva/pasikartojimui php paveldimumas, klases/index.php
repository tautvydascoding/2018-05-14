
<?php

include_once('zmogus.php');
// UZDUOTIS 1:
// sukurti tris klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu

// 'zmogus'  turi: public ugis, protected svoris, private pinigai
// 'moteris' papildomai turi: estrogenai
// 'vyras'   papildomai turi: testosteronai

// UZDUOTIS 2:
// susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju: ugis, svoris, pinigu skaicius, hormono skaicius


// UZDUOTIS 3:
//  atspausdinti visus kintamuosius (NEnaudojant/nesikurti "zmogus"  objekto


      $Monika = new Moteris();

      $Monika->ugis = 190;
      $Monika->pinigai = 1000;
      $Monika->keiciuSvoris(60);
      $Monika->estrogenai=3550;


      echo "<h2> Ugis: $Monika->ugis cm</h2>";
      echo "<h2> Estrogenai: $Monika->estrogenai </h2>";
      echo "<h2> Svoris:". $Monika->getSvoris() . " kg</h2>";
      echo "<h2> Pinigai:". $Monika->pinigai ." Eur</h2>";

      echo "<br />";

      $Tadas = new Vyras();

      $Tadas->ugis = 210;
      $Tadas->pinigai = 1500;
      $Tadas->keiciuSvoris(90);
      $Tadas->testosteronai=8600;

      echo "<h2> Ugis:  $Tadas->ugis cm</h2>";
      echo "<h2> Estrogenai:  $Tadas->testosteronai </h2>";
      echo "<h2> Svoris: ". $Tadas->getSvoris() . " kg</h2>";
      echo "<h2> Pinigai: ". $Tadas->pinigai ." Eur</h2>";
