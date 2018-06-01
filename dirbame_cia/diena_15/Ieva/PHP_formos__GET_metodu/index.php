<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>scope</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">

        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">

    </head>

    <body>
        <h1 > Isijunk console </h1>
<!--
        1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
         vardas, pavarde, telefonas, mygtukas 'registruotis'

        2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila

        3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
        pvz.: print_r( $_GET)

        // PASIBANDYTI PAPILDOMAI
        pvz.: print_r( $GLOBALS) -->

<form action="registracija.php" method="get">
  <input type="text" name="vardas" maxlength="10" placeholder="Jūsų vardas" required> </br>
  <input type="text" name="pavarde"  maxlength="15" placeholder="Jūsų pavardė" required></br>
  <label for ="telefonas">+370</label>
  <input type="tel" name="telefonas" value="" placeholder="00000000" pattern="[0-9]{8}" title="Telefono numeris turi buti 8iu skaiciu, negali buti bruksneliu, tarpu ar kt. simboliu" required></br>
  <input type="email" name="El.pastas" value="" placeholder="aa@aaa.lt" "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></br>
  <button type = "submit" name="button"> Registracija </button>
</form>









        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
