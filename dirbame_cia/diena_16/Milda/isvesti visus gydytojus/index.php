
<?php


require_once('db_functions-full.php');

$visiDaktarai = getDoctors();
print_r($visiDaktarai);

$daktaras1=mysqli_fetch_assoc($visiDaktarai);
// print_r($daktaras1);
$daktaras2=mysqli_fetch_assoc($visiDaktarai);
$daktaras3=mysqli_fetch_assoc($visiDaktarai);
$daktaras4=mysqli_fetch_assoc($visiDaktarai);

?>



<?php


$visiDaktarai = getDoctors();

$gydytojas = mysqli_fetch_assoc($visiDaktarai);
while ($gydytojas) {
  echo "<h2>" . $gydytojas['name'] . $gydytojas['lname'] . "</h2>";
  $gydytojas = mysqli_fetch_assoc($visiDaktarai);
  echo "<a class='btn btn-danger' href='delete-doctor.php?numeris="
  . $gydytojas['id']
  . "'>Trinti</a>";
}


// -----------arba FOR----------------------------------------------------------
//
// $gydytojuSkaicius = mysqli_num_rows($visiDaktarai);
// for ($i=0; $i <$gydytojuSkaicius; $i++) {
// $gydytojas = mysqli_fetch_assoc($visiDaktarai);
// echo "<h2>" . $gydytojas['name'] . $gydytojas['lname'] . "</h2>";
//
// }










 ?>
