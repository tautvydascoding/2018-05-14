<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">

    </head>

    <body>
        <h1 > Isijunk console </h1>

        <?php
        $kintamasis = "ake";
          switch ($kintamasis) {
            case 'avinas':
              echo "Labas avine <br />";
              break;
              case 'jautis':
                echo "Jusu  <br />";
                break;
                case 'vandenis':
                  echo "laukia moteris taves <br />";
                  break;
            default:
              echo "tokio \" $kintamasis\" zodiako neturime <br />";
              break;
          }

          // UZDUOTIS  "Switch"
         // paduoti varda ir Jeigu jis lygus:
         // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
         // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
         // "opel" - atspausdinti "Susimastykite apie naujus priedus"
         $vardas = "   aUdi";
         $vardas  = strtolower($vardas); // strtolower pavercia i mazasias raides, bet nesugadina originalo
         $vardas = trim($vardas); //pasalina tarpus is abieju sonu, bet ne is vidurio
         switch ($vardas) {
           case 'audi':
             echo "Susimastykite apie variklio prieziura <br />";
             break;
           case 'bmw': //todel visa informacija reikia rasyti mazosiomis raidemis, bet klientai gali rasyti bet kaip
              echo "Susimastykite apie greiti ir vairavimo kultura <br />";
             break;
             case 'opel':
               echo "Susimastykite apie naujus priedus <br />";
               break;
           default:
             echo "negalima apie \"$vardas\" nieko patarti";
             break;
         }



         ?>








        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
