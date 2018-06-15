<?php
// 2) sukurti (abstrakcia) klase "User" :
    // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
    // A) sukurti kintamuosius:
        // name, password , createdDate, lastLogin
    // B) abstrakti funkcija "Loguot()"
    // C) NE abstrakti funkcija clearlastLoginTime()

abstract class User {
    public  $name = "neturi";
    public  $password = "xxxx";
    public  $createdDate = "1900-00-00";
    public  $lastLogin = "1900-00-01";

    abstract function Logout();
    function clearlastLoginTime() {
        // code..
    }
}

// 3) sukurti klase Admin :
    // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
// 4)
     // A) issivesti username,
     // B) pakeisti username
     // C) issivesti username
