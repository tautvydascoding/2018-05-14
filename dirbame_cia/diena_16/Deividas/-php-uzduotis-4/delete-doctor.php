
<?php
require_once('db_functions.php');

function deleteDoctor($nr) {
    $uzkoduotasNR = htmlspecialchars( $nr, ENT_QUOTES, 'UTF-8' );

    $manoSQL = "DELETE FROM doctors
                       WHERE id='$uzkoduotasNR'
               ";
    mysqli_query(getPrisijungimas() ,   $manoSQL );
}
 deleteDoctor(19);

 ?>
