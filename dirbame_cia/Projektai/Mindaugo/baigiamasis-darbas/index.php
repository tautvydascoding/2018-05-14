<?php
include_once('header.php');
 ?>
<!-- pagrindinis pav -->
  <div class="pimg1">
    <div class="ptext ">
      <span class="border zemellink">
        <a href="#zemelapis" class="slide"> Rask vietą sau! </a>
      </span>
    </div>
  </div>
<!-- apie porjekta -->
  <?php
include_once('pagrindinis.php')
   ?>
<!-- naujienos ir nuotrauka -->
  <div class="pimg2">
    <div class="ptext">
      <span class="border trans slide" id="naujienos">
        Naujienos
      </span>
    </div>
  </div>

  <section class="section section-dark "  >
    <span class="txtbord">
      <div class="row">
      <div class="col-md">
        <h2>Pirmas straipsinis</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-md">
        <h2>Antras straipsins</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-md">
        <h2>Trecias straipsnis</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      </div>




    </span>
  </section>


<!-- galerija randasi galerija.php faile -->
  <div class="pimg3 slide" id="galerija">
    <div class="ptext">
      <span class="border trans">
        Galerija
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <hr>
    <?php
 include_once('Galerija.php');
     ?>
     <hr>
  </section>
<!-- zemelapis, turi atskira js zemelapis.js -->
  <div class="pimg4 slide" id="zemelapis">
    <div class="ptext">
      <span class="border">
        Vietos skirtos tau
      </span>
    </div>

  </div>

  <section class="section section-dark">

    <div class="container " >
      <div id="map"></div>
    </div> <!-- zemelapio konteineris  -->

  </section>
<!-- kontaku pavadinimas  -->
  <div class="pimg1" >
    <div class="ptext">
      <span class="border">
        Kontaktai
      </span>
    </div>

  </div>


<!-- kontaktai -->

<?php
include_once('footer.php');
 ?>
