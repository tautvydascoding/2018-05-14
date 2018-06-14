<?php
require_once('kainosDB.php');

$kaina1 = getKaina(1); // array

if ($kaina1 != NULL){

}
?>

<h2 style="text-align:center">Kainos</h2>

<?php   $kaina1 = getKaina(1); // array ?>
<div class="columns">
  <ul class="kainos">
    <li class="header"><?php  echo  $kaina1['laikotarpis']; ?></li>
    <li class="grey"><?php  echo  $kaina1['kaina'] . " " . "\xE2\x82\xAc"; ?></li>
  </ul>
</div>
<?php   $kaina2 = getKaina(2); // array ?>
<div class="columns">
  <ul class="kainos">
    <li class="header"><?php  echo  $kaina2['laikotarpis']; ?></li>
    <li class="grey"><?php  echo  $kaina2['kaina'] . " " . "\xE2\x82\xAc"; ?></li>
  </ul>
</div>
<?php   $kaina3 = getKaina(3); // array ?>
<div class="columns">
  <ul class="kainos">
    <li class="header"><?php  echo  $kaina3['laikotarpis']; ?></li>
    <li class="grey"><?php  echo  $kaina3['kaina'] . " " . "\xE2\x82\xAc"; ?></li>
  </ul>
</div>
<div class="container">
<p>Valandos nuo 9 iki 18 val. Esant poreikui galime atsidaryti anksciau ir darba baigti veliau. Pries atvykstant prasome labai prasome parasyti mums zinute (i FB) arba paskambinti (bent valandele pries atvykima).</p>
</div>
<!-- <form   action="email.php" method="post">
    <input type="text" name="vardas"  placeholder="vardas" >
    <input type="email" name="pastas" placeholder="el. pastas"   required>
    <textarea name="klausimas" rows="8" cols="80" placeholder="Jusu klausimas"  required>  </textarea>
    <button type="submit" name="button" >
        Klausti
    </button>
</form> -->
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<div class="container">
    <br/>
    <div class="abc">
        <div class="panel-body">
            <h2 style="color:#ffb90f"><b> <center>Susisiekite su mumis</center> </b></h2></div>
    </div>
</div>
<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-8" style="background-color:#00cdcd;">
            <div class="well well-sm" style="background-color:#00cdcd;">
                <form action="email.php" method="post" style="background-color:#00cdcd;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                  Vardas</label>
                                <input type="text" class="form-control" name="vardas" id="name" placeholder="Jūsų vardas" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                  El. Paštas</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" name="pastas" id="email" placeholder="Įrašykite el. pašto adresą" required="required" /></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                  Žinutė</label>
                                <textarea name="klausimas" id="message" class="form-control" rows="5" cols="25" required="required" placeholder=" Jūsų žinutė"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                              Siųskite žinutę</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
