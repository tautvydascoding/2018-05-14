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
  <body class="container">
    <h1>tekstas</h1>

    <div class="row">

    </div>



    <?php
      echo "<div class='row'>";
    for ($i=0; $i <6; $i++) {
      // code...
      include( "preke.php");
    }
      echo "</div>";


      //UZDUOTIS:
      //1: sukurti "preke.php" faila
      //h2
      //p
      //button
      //2: PALEIST for cikla 6 kartus( ideti i container ir row)
      //3) index.php
      // sukurti kintamuosius:
      //$kaina = ..;
      //$antraste = ..;
      //$aprasymas = ..;



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
