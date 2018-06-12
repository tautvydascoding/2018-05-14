<?php
require_once('duomenys.php');
$darbuotoja1 = getDarbuotoja(1);
$darbuotoja2 = getDarbuotoja(2);

if ($darbuotoja1 != NULL){
}

 ?>


<h1>Mūsų tikslai</h1>

<div class="row">
    <ul>
        <li>Ugdyti vaikučių asmenybę, savarankiškumą, pasitikėjimą savimi;</li>
        <li>lavinti vaizduotę, kūrybiškumą;</li>
        <li>skatinti smalsumą;</li>
        <li>skatinti iniciatyvumą ir kūrybiškumą;</li>
        <li>padėti įgyti komunikacinių gebėjimų;</li>
        <li> organizuoti vaikų ir tėvų lavinamuosius ugdomuosius užsiėmimus;</li>
    </ul>
</div>
<div class="row">
    <div class="card-group mx-auto">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top " style="height: 28rem;" src="img\egle.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo  $darbuotoja1['vardas'] . $darbuotoja1['pavarde'] ; ?></h5>
                    <p class="card-text">Mūsų įkūrėja ir vadovė - psicholingvistikos mokslų daktarė, kuriai labai rūpi vaikų kalba: kalbos įsisavinimas, kalbos raida, kalbos sutrikimai, dvikalbystė/daugiakalbystė, todėl gimus dukryte, įgyvendino seną svajonę kr įkūrė “Smalsius
                        šnekučius”.</p>
                        <p>Telefonas: <?php echo  $darbuotoja1['telefonas'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 28rem;" src="img\aug.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo  $darbuotoja2['vardas'] . $darbuotoja2['pavarde'] ; ?></h5>
                    <p class="card-text">Geriausia mūsų mažųjų lankytojų žaidimų ir įvairių užsiėmimų draugė!.</p>
                    <p>Telefonas: <?php echo  $darbuotoja2['telefonas'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
