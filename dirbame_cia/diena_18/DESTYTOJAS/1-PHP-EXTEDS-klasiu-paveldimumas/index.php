<?php


include_once('vilkas.php');

$simba = new Vilkas();
echo $simba->svoris    . "<br />";
echo $simba->tipas     . "<br />";
// echo $simba->pusryciai . "<br />";
// echo $simba->ligos     . "<br />";

$simba->printLigos();
$simba->setPusryciai("pica");
$simba->printPusryciai();
