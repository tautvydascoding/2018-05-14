<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projektas</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">
        <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">


<!--
    KAIP SURASTI, KODEL failas neveikia?
    1. blogas kelias/pavadinimas iki failo:
    Patikrinimas:  puslapyje->Inspect -> Console
    2. ar i "<link" ideta      rel="stylesheet"
    2.1 ar issaugojot faila?
    2.2 ar  naudoji tinkama atributa "src" "href"
    2.3 issivalyti "Cash" F5 arba F5 + Fn   ARBA ctrl + shift + Del
    3. ar egzistuoja elementas, kuri bandai pakeisti  pvz: h1
    3.1 ar CSS faile parasei gera selectoriu ?
    pvz: section h1 { color: red; }
    Patikrinimas:  puslapyje->Inspect -> Elements  ziurime i stulpeli
    A) pazymeti html elmenta
    b) pasiziureti (desineje Styles) ar elementas turi suprogramuotus spakeitimus

    5. ar tikrai programuoti i failus, kurie paleisti narsykleje?
    patikrinimas:  uzdaryti failus Atome, atsiradyti juos per nauja ir paleisti narsykleje per nauja
-->


    </head>
<body>
      <h1> </h1>

    <div class = "container">







      <header class="">

        <nav class="navbar navbar-expand-md mx-auto bg-dark navbar-dark fixed-top text-uppercase">
            <a class="navbar-brand" href="#">
              <img id="logoImage" src="images/logo3.jpg" alt="logo" width="100px" height="auto" />
            </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <ul class="navbar-nav">

                  <li class="nav-item">
                    <a class="nav-link zoom" href="index.php">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link zoom" href="gallery.php">Gallery</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link zoom" href="blog.php">Blog</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link zoom" href="contacts.php">Contacts</a>
                  </li>

                </ul>
              </div>
      </nav>

      </header> <!-- IDEA: užsidaro header --------------------------->
</div>
