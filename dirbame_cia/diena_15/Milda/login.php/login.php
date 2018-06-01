<?php

print_r($_GET);


$VartotojoVardas = $_GET['name'];
$VartotojoSlaptazodis = $_GET['password'];
$VartotojoData = $_GET['data'];

echo "<h2> $VartotojoVardas </h2>";
echo "<h4> $VartotojoSlaptazodis  </h4>";
echo "<h4>  $VartotojoData </h4>";
