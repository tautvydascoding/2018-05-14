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
        <h1><?php
        //vienos linijos komentaras
        #irgi vienos linijos komnetaras
        /*daugiau liniju komentaras toks pat kaip css*/
            print "hello world!";

            /*kintamuju taisykles
                kintamieji nurodomi su $ zenklu
                kintamieji negali prasideti skaiciumi
                galima pradeti kintamaji su _ zenklu
                didziosios raides ir mazosios turi sutapti
                */

                /*informacijos tipai
                    stringai
                    skaiciai (integers) gali buti sveiki ir neigiami
                    skaiciai per kableli (floats)
                    booleanai
                    masyvai (arrays)
                    objekatai
                    null
                    recourse (returnai ir pan)
                */
            $output = "labas pasauli";
            $num1 = 4;
            $num2 = 2;
            $sum = $num1 + $num2;
            echo $sum;
            $num2 = 4.21;
            $bool1 = true;

            echo "$output";

            $string1 = "labiuks";
            $string2 = "pasauli";
            // $pasisveikinimas = $string1 + $string2;//taip neveikia, nes php negali sudeti stringu
            $pasisveikinimas1 = $string1 .' '. $string2;//cia vyksta concatiningas
            echo $pasisveikinimas1;//su vienomiks kabutemis neina sudeti

            $pasisveikinimas2 = "$string1 $string2";
            echo $pasisveikinimas2;//su dvigubomis eina


            define ('SVEIKI', 'laba diena visiems');//konstanta
            echo SVEIKI;

            define ('SVEIKI', 'laba diena visiems', true);
            echo sveiki; //jeigu nesinori rasyti is didziuju raidziu
        ?></h1>









        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
