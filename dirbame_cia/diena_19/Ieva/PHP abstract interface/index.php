<?php

// Svorio informacija

    interface Z {
          public function setSvoris($svoris);
          public function getSvoris();
    }

// reikia atskirame faile kurti klase, bet tuomet turi buti include failo

    class A implements Z {
          protected $svoris = 100;

          public function setSvoris($svoris) {
            $this->svoris = $svoris;
          }

          public function getSvoris() {
            return $this->svoris;
          }

    }

// reikia atskirame faile kurti su include

      $Petras = new A ();

      echo "Svoris:" . $Petras->getSvoris() . "<br />";
      $Petras->setSvoris(120);
      echo "Svoris:" . $Petras->getSvoris() . "<br />";
