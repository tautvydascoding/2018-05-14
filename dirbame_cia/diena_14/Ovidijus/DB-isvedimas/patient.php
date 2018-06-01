<?php

function getPatient( $nr ) {
    // apsauga - ar paduotas skaicius
    if ( !is_numeric($nr) ) {
        return NULL;
    }
    //                                           '$nr'
    $manoSQL = "SELECT * FROM patients   WHERE id='$nr';   ";
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

$patient1 = getPatient(2);
$patient2 = getPatient(4);
$patient3 = getPatient(6);


if ($patient1 != NULL) {
  echo "<h2> NR: " . $patient1["id"] . "</h2>";
  echo "<h3> Vardas ir Pavarde: " . $patient1["name"] ." ". $patient1["lname"] . "</h3>";
  echo "<h4> Gydancio daktaro id: " . $patient1["doctor_id"] . "</h4>";
}

if ($patient2 != NULL) {
  echo "<h2> NR: " . $patient2["id"] . "</h2>";
  echo "<h3> Vardas ir Pavarde: " . $patient2["name"] ." ". $patient2["lname"] . "</h3>";
  echo "<h4> Gydancio daktaro id: " . $patient2["doctor_id"] . "</h4>";
}

if ($patient3 != NULL) {
  echo "<h2> NR: " . $patient3["id"] . "</h2>";
  echo "<h3> Vardas ir Pavarde: " . $patient3["name"] ." ". $patient3["lname"] . "</h3>";
  echo "<h4> Gydancio daktaro id: " . $patient3["doctor_id"] . "</h4>";
}
