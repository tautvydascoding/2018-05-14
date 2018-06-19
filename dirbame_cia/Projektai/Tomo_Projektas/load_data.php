<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studija";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
