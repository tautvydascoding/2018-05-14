
<?php
require_once('db_functions-full.php');
echo "GET masyvas: <br />";
print_r( $_GET );


$nr = $_GET['numeris'];

deleteDoctor($nr);
