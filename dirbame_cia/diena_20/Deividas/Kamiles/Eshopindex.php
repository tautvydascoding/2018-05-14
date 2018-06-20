<?php

include("prisijungimas-Db.php");

$sql = 'SELECT * FROM products ORDER by id ASC';
$rezultatai = $prisijungimas ->query($sql);

include("shopas.php");
 ?>

<?php
  include("head.php");
  include("Ebody.php");
  include("foot.php");
   ?>
