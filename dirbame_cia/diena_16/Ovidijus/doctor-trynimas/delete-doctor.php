<?php

require_once('db_functions_full.php');

echo "GET masyvas: <br />";
print_r($GET);

$nr = $_GET['numeris'];

deleteDoctor($nr);


 ?>
