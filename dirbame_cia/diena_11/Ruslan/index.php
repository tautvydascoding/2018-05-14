<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo "mano zinute </br>";
        $vardas = "Petras";
        echo "aukstas $vardas isejo i lauka </br>"; // Isveda kintamuju reikesme
        echo 'auktas $vardas isejo <br>';            // Isveda kintamojo pavadinima (Leidzia naudoti $ zenkla);

        print( " kitas budas isvesti </br>" );                                //print yra funkcija
        // die( " Irgi dar vienas budas isvesti</br>"); //die irgi isvedzia zinute, BET po sios zinutes visa koda (html, java ir php) nebeatvaizduoja

        // Constant'os nekintantis kintamasis, isvedamu komentaru skaicius, duombaze ir pan.
        define("HOMESTRAIPSNIUSK", 6 );
        echo HOMESTRAIPSNIUSK . "<br>";

        //PHP stringu apjungimas rasomas per taska $string1 . $string2

        //Kintamieji
        $nr = 999; //Number (Integer) kintamasis (lygus skacius)
        echo gettype($nr);
        echo "<br> Skaiciaus tipas: " . gettype($nr) . "<br>";

        settype ($nr, "string"); //Kintamojo tipo keitimas.
        echo "<br> Skaiciaus tipas: " . gettype($nr) . "<br>";

        if(gettype($nr) == "string"){
            settype($nr, "integer");
            if ($nr != 0){
                $ats = 100/$nr;
            }
        }
        echo "atsakymas:" .$ats . "<br>";
        echo "atsakymas: $ats </br>";

        // strlen   // Atvaziduoja STRING ilgi
        echo "atsakymas: " . $ats . "<br>";
        echo "teksto ilgis: " . strlen($nr) . "<br>";

        $darbuotojas = ["Povilas","Povilaitis",1992];
        echo "<br>";
        $zmogus = ["vardas"=>"Jonas","pavarde"=>"Jonaitis","amzius"=>25];
        print_r ($zmogus);
        echo "<br>";
        print_r ($darbuotojas);
        echo "<br>";
        echo count($darbuotojas);
        echo "<br>";
        echo "<br>";

        $masina = ["pavadinimas"=>"opel",
                    "metai"=> 2000,
                    "spalva"=>"raudona"
    ];
        foreach ($masina as $stalciausPavadinimas => $konkretausStalciausReiksme)
        {
            echo $konkretausStalciausReiksme . "<br>";
        }

        echo "<br>";
        echo "<br>";

        foreach ($masina as $stalciausPavadinimas => $konkretausStalciausReiksme)
        {
            echo $stalciausPavadinimas . ": " . $konkretausStalciausReiksme . "<br>";
        }


    echo "<br>";
    echo "masinos metai: " . $masina["metai"];
        // <!-- PHP masyvai $names = ["antanas","petras"] -->
        //masyvo ilgis count($masyvoVardas)
    //     <!-- Asociatyvus masyvai -->
    //     <!-- $ages = ["peter"=>32,"joe"=>34] -->
    //     <!-- Masyvus atspausdint print_r($ages) -->
    //     <!-- Ikelimas i masyva: $zmogus["pavarde"]="Thomson" -->
    //     <!-- $darbuotojas = ["Povilas","Povilaitis",1992];
    // echo "<br>";
    // $zmogus = ["vardas"=>"Jonas","pavarde"=>"Jonaitis","amzius"=>25];
    // print_r ($zmogus);
    // echo "<br>";
    // print_r ($darbuotojas); -->

    

    ?>
</body>
</html>