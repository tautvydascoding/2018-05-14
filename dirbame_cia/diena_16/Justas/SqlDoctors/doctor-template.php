<?php
    include('db_functions.php');

    $gyd = getDoctor($_GET['numeris2']);
    // print_r($gyd);




    ?>


    <h1> Gydytojo info: </h1>
        <h2> <?= $gyd['name'] . " " . $gyd['lname'] ?></h2>
