<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Welcome to our site</title>
  </head>
  <body>



    <h1>tekstas</h1>

    <?php

        $kintamasis = 'skorpijonas';
        switch ($kintamasis) {
          case 'avinas':
              echo "Jusu laukia sekminga diena <br>";
            break;
            case 'jautis':
                echo "Jusu laukia NEsekminga diena <br>";
              // code...
              // code...
              break;
              case 'vandenis':
                  echo "Jusu laukia staigmena <br>";
                // code...
                break;

          default:
                echo "tokio \" $kintamasis \" zodiako neturime <br>" ;
            // code...
            break;
        }





          // UZDUOTIS  "Switch"
         // paduoti varda ir Jeigu jis lygus:
         // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
         // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
         // "opel" - atspausdinti "Susimastykite apie naujus priedus"

          //koks automobilis
         $tekstas = "audi";
         // paverciame i mazasias raides, bet nesugadiname orginalaus kintamojo
         $autoMarke = strtolower( $tekstas );
         //pasalina tarpus ir tab is abieju sonu (bet ne is teksto vidurio)
         $autoMarke = trim($autoMarke);


         switch ($autoMarke) {
           case 'audi':
           echo "Susimastykite apie variklio prieziura";
             // code...
             break;
             case 'bmw':
             echo "Susimastykite apie greiti ir vairavimo kultura";
               // code...
               break;
               case 'opel':
               echo "Susimastykite apie naujus priedus";
                 // code...
                 break;

           default:
             echo "tokios \" $autoMarke \" markes neturime <br>" ;
             // code...
             break;
         }



       ?>











    <article >

    </article>






























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="js/master.js"></script>
</body>
</html>
