<?php
include("prisijungimas-Db.php");

$sql = 'SELECT * FROM pagrindinis';
$rezultatai = $prisijungimas ->query($sql);
 ?>
<?php
  include("head.php");
  include("body.php");
  include("foot.php");
   ?>
