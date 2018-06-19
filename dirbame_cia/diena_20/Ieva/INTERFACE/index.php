<?php


// UZDUOTIS 1:
// sukurti interface 'Z'
// kuris turi f-jas:
//   setSvoris($x)
//   getSvoris()

// UZDUOTIS 2:
// sukurti klase 'A'
// kuri turi kintamaji:  svoris =100

// UZDUOTIS 2.2:
//   klase 'A' turi panaudoti interface 'Z'

// UZDUOTIS 3:
// susikurti objekta klases A

// UZDUOTIS 3.2:
// 1. atspausdinti svori
// 2. pakeisti svori i 90
// 3. atspausdinti svori

    interface Z {
          public function setSvoris($x);
          public function getSvoris();
        }


      class A implements Z {

          private  $svoris = 100;

          public function setSvoris($svoris) {
                $this->svoris = $svoris;

          }

          public function getSvoris() {
                return $this->svoris;

          }
      }

      $A1= new A();


      echo "svoris". $A1->getSvoris();
      echo "<br />";
      $A1->setSvoris(90);
      echo "naujas svoris ". $A1->getSvoris();
