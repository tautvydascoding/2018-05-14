<?php
include("header.php");
?>
<!-- Headerio pabaiga -->
<body>
<!-- NAVIGACIJA -->
<?php
include("navigacija.php");
?>
<!-- Navigacijos pabaiga -->
<!-- KONTAKTAI -->
<div class="container">
  <div class="row mt-2 ">
    <div class=" col-md-5 col-ms-12 kontaktai">
      <h2 class="text-center">MŪSŲ KONTAKTAI</h2><br />
        <h5 class="text-center">LIETUVA, KAUNAS</h5>
        <h5 class="text-center">El.paštas: darbai@darbai.lt</h5>
        <h5 class="text-center">Tel.numeris: 86562562</h5>

    </div>
    <div class="col-md-7 col-ms-12 mt-5 komunikavimas">
      <h2 class="text-center">KOMUNIKAVIMAS</h2>
      <h5 class="text-center ">Įveskite savo duomenis ir greitu metu su Jumis susisieksime.</h5>
      <input class="text-center mb-1 w-100" type="text" name="vardas" maxlength="15" placeholder="Jūsų vardas"><br />
      <input class="text-center mb-1 w-100" type="email" name="elpastas" placeholder="El.paštas" title="aaaaa@aaaaaa.lt" ><br />
      <input class="text-center mb-1 w-100" type="tel" name="Tel.numeris"  placeholder="861234567" pattern="[0-9]{9}" title="Tel numeris ne maziau 9 simboliu" required><br />
      <textarea class="w-100 text-center" name="name" rows="4" cols="80" placeholder="Įveskite tekstą"></textarea>
      <input class="siusti w-100" type="submit" name="" value="Siųsti">
    </div>

  </div>


<!-- Kontaktai pabaiga -->

<!--\/ linkai \/  -->
<?php
include("footerLink.php");
 ?>
