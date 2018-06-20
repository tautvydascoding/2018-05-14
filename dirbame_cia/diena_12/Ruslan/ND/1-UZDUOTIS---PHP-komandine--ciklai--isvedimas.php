<!-- // KOMANDINE UZDUOTIS




// A zogus ir B

// A
// 1 sukurti array su meniu punktu pavadinimais (bent 5)
// 1.1 sukurti <nav> <ul>  blokus
// 2 su ciklu (loop) isvesti <li> elementus ir meniu punktus -->
<?php
    $meniu = ["Home","About","Contact","Products","Reviews"];
    echo ("<nav><ul>");
    foreach ($meniu as $stalciausPavadinimas => $konkretausStalciausReiksme)
        {
            echo ("<li>" . $konkretausStalciausReiksme . "</li>");
        }
    echo ("</ul></nav>");


    $articles = ["Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus tortor et enim blandit, in rutrum odio consectetur. Quisque posuere quam malesuada nulla viverra, et sagittis dolor commodo. Etiam cursu",
                 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus tortor et enim blandit, in rutrum odio consectetur. Quisque posuere quam malesuada nulla viverra, et sagittis dolor commodo. Etiam cursu",
                 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus tortor et enim blandit, in rutrum odio consectetur. Quisque posuere quam malesuada nulla viverra, et sagittis dolor commodo. Etiam cursu",
                 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus tortor et enim blandit, in rutrum odio consectetur. Quisque posuere quam malesuada nulla viverra, et sagittis dolor commodo. Etiam cursu",
                 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus tortor et enim blandit, in rutrum odio consectetur. Quisque posuere quam malesuada nulla viverra, et sagittis dolor commodo. Etiam cursu",
                 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus tortor et enim blandit, in rutrum odio consectetur. Quisque posuere quam malesuada nulla viverra, et sagittis dolor commodo. Etiam cursu"];
     
    echo ("<div class='container'><section class='row'>");
    foreach ($articles as $stalciausPavadinimas => $konkretausStalciausReiksme)
    {
        echo ("<div class='col-md-3'>" . $konkretausStalciausReiksme . "</div>");
    }
    echo ("</section></container>");
?>
<!-- // B 

// 1 sukurti array su 6 skritingu straipsniu turiniu  
// 1.1 sukurti <section>   bloka
// 2 su ciklu (loop) isvesti <div class="col-3"> <article> elementus ir juose <p> straipsnio turini
// t.y. 3 stulpelius ir kiekviename po 1 straipsni -->
