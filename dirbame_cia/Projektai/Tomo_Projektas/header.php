<?php
include 'load_data.php';
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8">
    <title>Smalsūs šnekučiai</title>
    <!--  kad ant ivairiu irenginiu media veiktu   -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kavoon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <!-- mano failas visada zemiau -->
    <script src="http://code.jquery.com/jquery-git2.min.js" type="text/javascript" ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/grid-gallery.css">
    <link rel="stylesheet" href="css/master.css">

    <script>
    		$(document).ready(function(){
            var tikslaiCount = 1;
            $("button").click(function(){
                tikslaiCount = tikslaiCount + 1;
                $("#tikslai").load("load_tikslai.php", {
                tikslaiNewCount: tikslaiCount
                });
            });
        });
	</script>
</head>

<body>
    <header>
<form action="search.php" method="post">
<input type="text" name="search" placeholder="Paieška">
<button type="submit" name="submit-search">Paieška</button>
</form>
    </header>

    <nav class="navbar navbar-expand-md navbar-light spalvaNav sticky-top aukstis-100">
        <a class="navbar-brand" href="index.php">
        <img class="dydis"src="img/logotipas.png" alt="Logotipas Smalsūs Šnekučiai">
        </a>
        <button class="navbar-toggler " data-toggle="collapse" data-target="#kolapsas">
<span class="navbar-toggler-icon"></span>
</button>
        <div class="collapse navbar-collapse  spalvaNav" id="kolapsas">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class=" " href="ApieMus.php">Apie mus</a>
                </li>
                <li class="nav-item">
                    <a class="" href="Gallery.php">Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="" href="KainosMain.php">Kainos </a>
                </li>
                <li class="nav-item">
                    <a class="" href="form.php">Registracija </a>
                </li>
            </ul>
        </div>
    </nav>
