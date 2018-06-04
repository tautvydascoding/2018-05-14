<?php
include("header.php");
 ?>
<body>
<!-- NAVIGACIJA -->
  <?php
  include("navigacija.php");
   ?>
<!-- Karuseles -->
<div id="slides" class="carousel slide mt-2" data-ride="carousel">

  <ul class="carousel-indicators ">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img/1.jpg" alt="">
      <div class="carousel-caption">
        <h1 class="display-5">Tekstas karuseleje</h1>
        <button type="button" class="btn btn-primary btn-lg" href="kontaktai.php">Kontaktai</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/2.jpg" alt="">
    </div>

    <div class="carousel-item">
      <img src="img/3.jpg" alt="">
    </div>

  </div>
</div>
<!-- karuseles pabaiga -->

<!-- Apie mus pradzia -->
<div class="container-fluid mt-2">
  <div class="row">
  <div class="col-md-6 col-ms-12 bg-info aukstis-350 mr-2">
    <h2>APIE MUS</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="col-md col-ms bg-warning aukstis-350">
<h6>Patikimumas</h6>
<h8>Komanda</h8>
<p>Ut enim ad minim veniam, quis nostrud exercitation </p>

<h6>Kokybe</h6>
<h8>Patirtis</h8>
<p>Duis aute irure dolor in reprehenderit in </p>

<h6>Inovativumas</h6>
<h8>Tobulinimasis</h8>
<p>Lorem ipsum dolor sit amet, consectetur </p>
  </div>
  </div>
</div>
<!-- Apie mus pabaiga -->

<!-- Paslaugos pradzia -->
<button class="paslaugos mt-2" data-toggle="collapse" data-target="#ikoneles" >MŪSŲ ATLIEKAMI DARBAI</button>
<div id="ikoneles" class="collapse">
  <div class="container-fluid padding">
    <div class="row text-center">

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

      <div class="col-sm-6 col-md-3">
        <img class="ikonos" src="" >
        <h6>tekstas</h6>
      </div>

    </div>
  </div>
</div>
<!-- Paslaugos pabaiga -->




<?php
include("footeris.php");
 ?>

<?php
include("footerLink.php");
 ?>
