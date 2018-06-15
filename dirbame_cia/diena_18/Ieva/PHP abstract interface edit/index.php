<?php

// uzduotis:
// 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
    // 0) Ar gali tureti kintamuosius????
    // changeName($a)
    // isLogin()
    // getName()
// 2) sukurti (abstrakcia) klase "User" :
    // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
    // A) kuri turi neprivalomus kintamuosius:
        // name, password , createdDate, lastLogin
    // B) privaloma funkcija "Loguot()"
    // C) neprivaloma funkcija clearlastLoginTime()
// 3) sukurti klase Admin :
    // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)


        interface Edit {
            public function changeName($a) { }
            public function isLogin() { }
            public function  getName() { }

        }

        abstract class User {
          public  $name ="neturi";
                  $password="bla";
                  $createdDate="xxx";
                  $lastLogin ="yyy";

          abstract function Logout();
          function clearlastLoginTime();
        }

// reikia atskirame faile includinti

        class Admin extends User  implements Edit {
              function Logout() {


              }

              public function changeName () {

              }

              public function isLogin() {


              }
        }
