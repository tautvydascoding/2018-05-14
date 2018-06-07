<?php

print_r($_GET);

$vartotojoVardas=$_GET['username'];
$vartotojoSlaptazodis=$_GET['psw'];
$vartotojoData=$_GET['data1'];
$slaptas=$_GET['id'];


echo "<h3> Vartotojo vardas: ". $vartotojoVardas . "</h3>";
echo "<h3> Vartotojo slaptazodis: ". $vartotojoSlaptazodis . "</h3>";
echo "<h3> Data: ". $vartotojoData . "</h3>";
echo "<h3> Slaptas: ". $slaptas . "</h3>";
