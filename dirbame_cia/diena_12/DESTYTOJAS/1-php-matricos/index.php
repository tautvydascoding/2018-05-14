<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>scope</title>
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
        $visosPrekes = [];
        $preke1 = [     "Plaktukas",
                        "Lorem Plaktukas ipsum dolor sit amet, consectetur adipisicing elit",
                        12.90,
                        4
                    ];
        $preke2 = [     "Svytrinis",
                        "Lorem Svytrinis ipsum dolor sit amet, consectetur adipisicing elit",
                        0.4,
                        151
                    ];
        $preke3 = [     "Reples",
                        "Lorem Reples ipsum dolor sit amet, consectetur adipisicing elit",
                        16.50,
                        18
                    ];
        $visosPrekes[0] = $preke1;
        $visosPrekes[1] = $preke2;
        $visosPrekes[2] = $preke3;

        // testuojam ar viskas gerai - ar turime duomenu
        // print_r(  $preke1  );
        // echo "<br />";
        // print_r(  $preke2 );
        // echo "<br />";
        // print_r(  $preke3 );
        // echo "<br />";
        // print_r(  $visosPrekes );

        // UZDUOTIS 1.
        // sumazinti repliu kieki
        // sumazinti plaktuku kaina 4 eur arba 33 procentais

        // UZDUOTIS 2.
        // isvesti prekes informacija:
         // pavadinima i <h2></h2>
        // aprasymas  i <p>
        // kaina i mygtuka


        // UZDUOTIS 1.
        // sumazinti repliu kieki: trys budai
        $visosPrekes[2][3] -= 1;
        $visosPrekes[2][3]--;
        $visosPrekes[2][3] = $visosPrekes[2][3] - 1;

        // sumazinti plaktuku kaina 4 eur arba 33 procentais
        // $visosPrekes[0][2] -= 4;
        $visosPrekes[0][2] *= 0.66;
        echo "plaktuko kaina:" .  $visosPrekes[0][2] . "<br />" ;


        // UZDUOTIS 2.
        // isvesti prekes informacija:
         // pavadinima i <h2></h2>
        // aprasymas  i <p>
        // kaina i mygtuka

        for ($i=0; $i < count($visosPrekes); $i++) {
            echo "<h2>"    . $visosPrekes[$i][0] . "</h2>";
            echo "<p>"     . $visosPrekes[$i][1] . "</p>";
            echo "<button>". $visosPrekes[$i][2] . "</button>";
        }

     ?>





        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
