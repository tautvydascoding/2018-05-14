<?php

print_r($_GET);
print_r($_POST);

$loginas = $_GET["name"];
$passvordas = $_GET["password"];
$data = $_GET["date"];
$vartotojoid = $_GET["id"];

echo "<h2> $loginas </h2>";
echo "<h3> $passvordas </h3>";
echo "<h4> $data </h4>";
