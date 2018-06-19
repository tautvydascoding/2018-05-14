<?php
require_once('duomenys.php');
$darbuotoja1 = getDarbuotoja(1);
$darbuotoja2 = getDarbuotoja(2);

if ($darbuotoja1 != NULL){
}
?>

 <h1 class="text ml16" style='text-align:center'>Mūsų tikslai</h1>

<div class="ml-5" id="tikslai">
    <div class="container-fluid ">
        <?php

        $sql = "SELECT * FROM tikslai LIMIT 1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h3>";
                echo $row['tikslas'];
                echo "</h3>";
            }
        }else {
            echo "Tikslų nebėra.";
        }
         ?>
    </div>

</div>
<button>Rodyti daugiau</button>

    <div class="container-fluid mb-3">
        <div class="row">
            <div class="card-group mx-auto">
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top " style="height: 28rem;" src="img\egle.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php  echo  $darbuotoja1['vardas'] . " " . $darbuotoja1['pavarde'] ; ?></h5>
                            <p class="card-text">Mūsų įkūrėja ir vadovė - psicholingvistikos mokslų daktarė, kuriai labai rūpi vaikų kalba: kalbos įsisavinimas, kalbos raida, kalbos sutrikimai, dvikalbystė/daugiakalbystė, todėl gimus dukryte, įgyvendino seną svajonę ir įkūrė
                                “Smalsius šnekučius”.
                            </p>
                            <p>Telefonas:
                                <?php echo  $darbuotoja1['telefonas'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="height: 28rem;" src="img\auguste.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php  echo  $darbuotoja2['vardas'] . " " . $darbuotoja2['pavarde'] ; ?></h5>
                            <p class="card-text">Augustė yra geriausia mažųjų lankytojų žaidimų ir įvairių užsiėmimų draugė! Jos fantazija ir išmanumas beribiai: sugalvoja tokių neįtikėtinų žaidimų ir užsiėmimų, kad vaikai juos nori kartoti ir kartoti! Augustė vaikučių laukia studijoje kiekvieną darbo dieną.</p>
                            <p>Telefonas:
                                <?php echo  $darbuotoja2['telefonas'] ?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
