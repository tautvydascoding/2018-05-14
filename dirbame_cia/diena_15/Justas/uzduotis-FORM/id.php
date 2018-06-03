<?php

    // print_r($_GET);

    $vartotojoVardas = $_GET['username'];
    $vartotojoSlaptazodis = $_GET['password'];
    $vartotojoData = $_GET['date'];
    $vartotojoId = $_GET['id'];

    ?>



    <h2> Sekmingai uzsiregistravote <?= $vartotojoVardas ?> </h2>
    <h3> Gimusio <?= $vartotojoData ?> </h3>
