<?php
require_once('db_functions-full.php');

 print_r( $_GET); //naudojas duomenyms spausdinti testuoti

$nr = $_GET['numeris'];

$gyditojoInfo = getDoctor($nr);

print_r($gyditojoInfo);

echo "<h2>" . $gyditojoInfo['id'] . " ". $gyditojoInfo['name'] . " ".$gyditojoInfo['lname']. "</h2>";
