<?php
include('header.php');
  ?>


<div class="container-fluid">
    <div class="row ">
        <div class="col-md-6">




<!-- Zemelapis -->
          <div>
              <h3>Mus rasite šiuo adresu</h3>


              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5015372729135!2d-0.020106784757935876!3d51.50401411877257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602b9fa43945b%3A0x356f4336d0a63fe6!2sCitigroup+Centre%2C+Canary+Wharf%2C+London%2C+Jungtin%C4%97+Karalyst%C4%97!5e0!3m2!1slt!2slt!4v1528269194590" width="600px" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
          </div>
<!-- baigiasi kairysis stulpelis -->
<div class="col-md-6 mt-6">


<form class="m-5" action="email.php" method="post">
  <div>
    <input class="w-70" type="text" name="vardas" maxlength="15" placeholder="Jusu vardas" required>
    <input class="w-70" type="email" name="pastas" placeholder="Jusu pastas" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    <textarea class="w-70" name="klausimas" rows="9" cols="65" maxlength="100" placeholder="Jusu komentaras" pattern="[^'\x22]+" title="Invalid input" required></textarea>
  </div>

  <button class=" btn btn-default" type="submit" name="button">Siusti</button>

</form>
</div>
<!--  baigiasi row-->
</div>
</div>
<!--konteinerio pabaiga  -->



    <p class="text-center float-none">
      Mūsų adresas:Canary Wharf, Londonas, Jungtinė Karalystė
    </p>
    <p class="text-center float-none">
      Telefonas: 861198761
    </p>
  </p>








<?php
include('footer.php');
  ?>
