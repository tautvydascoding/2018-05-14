<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
// uzduotis 1
            // A. susikurti meniu masyva: home, about, gallery, contact, blog
            // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)
            <?php
            $meniu = ["home","about","gallery","contacts","blog"];
            echo "<nav><ul>";
            foreach ($meniu as $stalciausPavadinimas => $konkretausStalciausReiksme)
        {
            echo "<li>" . $konkretausStalciausReiksme . "<br>";
        }
            echo "</ul></nav>";

            $photos = [ "https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png",
                        "https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png",
                        "https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png",
                        "https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png",
                        "https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png",
                        "https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png"];
            echo "<div class = 'container'><div class = 'row'>";
            foreach ($photos as $stalciausPavadinimas => $nuotrauka){
                echo "<div class=col-md-4>" . "<img src='$nuotrauka' alt=''  /></div>";
            }
            echo "</div></div>";
            



            ?>
            // uzduotis 2
            // A. susirasti 6 nuotraukas
            // B. susikurti nuotrauku pavadinimu masyva
            // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
            // <img src='./img/1.jpg' alt=''  />

           
</body>
</html>           
           
           


