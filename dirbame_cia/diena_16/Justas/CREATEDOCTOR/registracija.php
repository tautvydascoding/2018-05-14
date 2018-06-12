<?php
    include('db_functions.php');

    $vardas = $_GET['vardas'];
    $pavarde = $_GET['pavarde'];
    // print_r($_GET['vardas']);
    // print_r($_GET['pavarde']);

    createDoctor($vardas, $pavarde);

?>

<h2> Naujo gydytojo vardas: <?= $vardas ?></h2>
<h2> Naujo gydytojo pavarde: <?= $pavarde ?></h2>
