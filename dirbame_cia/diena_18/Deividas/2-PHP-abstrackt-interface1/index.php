<?php

    // uzduotis:
    // 1) sukurti interface "Edit" :
    //  1.1) kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
        // changeName($a)
        // getName()
        // isLogin()
        // NOTE: Ar interface gali tureti kintamuosius????
    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) sukurti kintamuosius:
            // name, password , createdDate, lastLogin
        // B) privaloma funkcija "Loguot()"
        // C) neprivaloma funkcija clearlastLoginTime()
    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
    // 4)
         // A) issivesti username,
         // B) pakeisti username
         // C) issivesti username


     // NOTE: abstrakti klase - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)


      include_once('Admin.php');

      echo "veikia   puikiai <br />";
      echo "vardas: "  . $Povilas->getName() . "<br />" ;
      $Povilas->changeName("Aldona") ;
      echo "Vardas: " . $Povilas->getName() . "<br />" ;
















     // ble
