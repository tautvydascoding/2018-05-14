<?php
include('header.php');
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
</div>;
<div class="container">

</div>



<?php include('footer.php'); ?>






 <!-- //     require_once('kainosDB.php');
//     $visosKainosObjektas = getKainos();
//      $kaina = mysqli_fetch_assoc( $visosKainosObjektas );
//     while( $kaina ) {
//         if ($kaina['kaina'] % 10 == 0) {
//             echo "<h2>" . $kaina['laikotarpis'] . " " . $kaina['kaina'] . "Eurų" . "</h2>";
//         }else {
//             echo "<h2>" . $kaina['laikotarpis'] . " " . $kaina['kaina'] . "Eurai" . "</h2>";
//         }
//         $kaina = mysqli_fetch_assoc( $visosKainosObjektas );  // !!!!
//     } -->
