veikia

<?php
 require_once('db_functions-full.php');


print_r( $_GET );

$sk = $_GET['numeris'];
echo "gydytojo numeris: $sk <br />";

$gyd = getDoctor($sk);

// print_r( $gyd ); // test

?>

<h2>
     <?php echo $gyd['name'];   ?>
 </h2>
