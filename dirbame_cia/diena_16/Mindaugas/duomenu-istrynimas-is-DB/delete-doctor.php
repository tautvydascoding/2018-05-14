<?php
require_once('db_functions-full.php');

// print_r( $_GET); //naudojas duomenyms spausdinti testuoti

$nr = $_GET['numeris'];

deleteDoctor($nr);
