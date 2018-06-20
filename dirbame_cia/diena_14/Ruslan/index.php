<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

require_once ('mysql_con.php');
$gydytojas1 = getDoctorData(2);
echo("<h2>".$gydytojas1[1]."<h2>");  



?>










</body>
</html>