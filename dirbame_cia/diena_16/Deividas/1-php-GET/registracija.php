


<!-- // 1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
//  vardas, pavarde, mygtukas 'registruotis'
//
// 2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila

// 2.2. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti
// vartotojo ivestus duomenis
// pvz.: print_r( $GET)
//4 paleisti savo f-ja createDoctor() -->



 <?php
    include('db_functions.php');

    print_r($_GET);

    $vartotojoVardas = $_GET['vardas'];
    $vartotojoPavarde = $_GET['pavarde'];

      echo '<h2>' . $vartotojoVardas . '</h2>';
      echo '<h2>' . $vartotojoPavarde . '</h2>';

      createDoctor($vartotojoVardas, $vartotojoPavarde );

      ?>
