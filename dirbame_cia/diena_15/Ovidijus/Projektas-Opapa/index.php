<?php
include("header.php");
 ?>
<body>



<!-- NAVIGACIJA -->
  <?php
  include("navigacija.php");
   ?>
   <div class="container ">
<!-- Karuseles -->
<div id="slides" class="carousel slide mt-4" data-ride="carousel">

  <ul class="carousel-indicators ">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img/1interior.jpg" alt="">
      <div class="carousel-caption">
        <h1 class="display-5  text-muted">Kreipkitės į mus !</h1>
        <a href="kontaktai.php"><button type="button" class="btn btn-lg" title="Paspauskite ir Jus nukreipsime į kontaktų skiltį"href="kontaktai.php">Kontaktai</button></a>

      </div>
    </div>

    <div class="carousel-item">
      <img src="img/2interior.jpg" alt="">
    </div>

    <div class="carousel-item">
      <img src="img/3interior.jpg" alt="">
    </div>

  </div>
</div>
<!-- karuseles pabaiga -->

<!-- Apie mus pradzia -->
<div class="container-fluid  mt-4">
  <div class="row">
  <div class="col-md-6 col-ms-12 apiemus mr-2" title="Aprašymas apie mūsų įmonės veiką">
    <h2 class="text-center">APIE MUS</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="col-md col-ms privalumai" title="Mūsų įmonės privalumai">
<h6 class="mt-2">Patikimumas</h6>
<h8>Komanda</h8>
<p class="text-muted">Ut enim ad minim veniam, quis nostrud exercitation </p>

<h6>Kokybe</h6>
<h8>Patirtis</h8>
<p class="text-muted">Duis aute irure dolor in reprehenderit in </p>

<h6>Inovativumas</h6>
<h8>Tobulinimasis</h8>
<p class="text-muted">Lorem ipsum dolor sit amet, consectetur </p>
  </div>
  </div>
</div>
<!-- Apie mus pabaiga -->

<!-- Paslaugos pradzia -->
<button class=" btn paslaugos mt-4" data-toggle="collapse" title="Paspauskite, kad pamatytumėte!!" data-target="#ikoneles" >MŪSŲ ATLIEKAMI DARBAI</button>
<div id="ikoneles" class="collapse mt-4">
  <div class="container-fluid mt-2">
    <div class="row text-center">

      <div class="col-sm-6 col-md-3 mt-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/baldai.png" ></a>
        <h6>Baldų surinkimas</h6>
      </div>

      <div class="col-sm-6 col-md-3 mt-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/dazymas.png" ></a>
        <h6>Dažymo darbai</h6>
      </div>

      <div class="col-sm-6 col-md-3 mt-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/grindys.png" ></a>
        <h6>Grindų klojimas</h6>
      </div>

      <div class="col-sm-6 col-md-3 mt-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/muras.png" ></a>
        <h6>Mūro darbai</h6>
      </div>

      <div class="col-sm-6 col-md-3 mt-2 mb-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/plyteles.png" ></a>
        <h6>Plytelių klyjavimas</h6>
      </div>

      <div class="col-sm-6 col-md-3 mt-2 mb-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/siltinimas.png" ></a>
        <h6>Sienų šiltinimas</h6>
      </div>

      <div class="col-sm-6 col-md-3 mt-2 mb-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/tinkavimas.png" ></a>
        <h6>Tinkavimo darbai</h6>
      </div>

      <div class="col-sm-6 col-md-3 mt-2 mb-2">
        <a href="paslaugos.php"><img class="ikonos" src="img/kita.png" ></a>
        <h6>Kiti smulkūs darbai</h6>
      </div>

    </div>
  </div>
</div>
<!-- Paslaugos pabaiga -->

</div>


<?php
include("footeris.php");
 ?>

<?php
include("footerLink.php");
 ?>
