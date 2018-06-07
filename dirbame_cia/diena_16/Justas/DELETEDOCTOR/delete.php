<?php
    require_once('db_functions.php');

    deleteDoctor($_GET['numeris']);

    redirect('index.php');
