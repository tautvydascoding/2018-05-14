<?php

include_once('admin.php');
$Povilas = new Admin();

echo "Veikia puikiai <br />";
echo "vardas:" . $Povilas->getName()  . "<br />";
 $Povilas->changeName("Aldona");
 echo "vardas:" . $Povilas->getName() . "<br />";
