<?php

function getDoctor( $nr ) {
    // apsauga - ar paduotas skaicius
    if ( !is_numeric($nr) ) {
        return NULL;
    }
    //                                           '$nr'
    $manoSQL = "SELECT * FROM doctors   WHERE id='$nr';   ";
    //  mysqli_query -  ivykdo SQL koda  ( grista mysql Objektas)
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

    // ar radome kazka lenteleje
    if (mysqli_num_rows($rezultatai) > 0 ) {
        // mysqli_fetch_assoc - paima sekancia eilute (ir pavercia i Array)
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
    } else {
        echo "ERROR!!!! Gydytojo nr: $nr neradome. Bandykite kita<BR /> "
                . mysqli_error(getPrisijungimas());
        return NULL;
    }
}

$doctor1 = getDoctor(1);
$doctor2 = getDoctor(2);
$doctor3 = getDoctor(4);

if ($doctor1 != NULL) {
echo "<h2> NR: " . $doctor1["id"] . "</h2>";
echo "<h3> Vardas ir Pavarde: " . $doctor1["name"] . " " . $doctor1["lname"] . "</h3>";
}
if ($doctor2 != NULL) {
  echo "<h2> NR: " . $doctor2["id"] . "</h2>";
  echo "<h3> Vardas ir Pavarde: " . $doctor2["name"] . " " . $doctor2["lname"] . "</h3>";
}
if ($doctor3 != NULL) {
  echo "<h2> NR: " . $doctor3["id"] . "</h2>";
  echo "<h3> Vardas ir Pavarde: " . $doctor3["name"] . " " . $doctor3["lname"] . "</h3>";
}
