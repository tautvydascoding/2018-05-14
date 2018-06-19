<?php

define('DB_NAME','hospital5');
define('DB_LOGIN','root');
define('DB_PASS','root');
DEFINE('DB_HOST','localhost');
$db_connect = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME);

function getConnection (){
    global $db_connect; // pasiimam global reiksme 
    if($db_connect){
        // echo "Pavyko prisijungti </br>";
        return $db_connect;
    } else {
        echo "Connection failed </br>" . mysqli_connect_error() . "<br>";
        return NULL;
    }
}

// $gydytojas1 = getDoctorData(2); // Darysim kad gryztu masyvas   
// print_r($gydytojas1);
// $gydytojas1 = 2;

function getDoctorData () {
    $manosql = "SELECT * FROM doctors WHERE id = '$nr'; ";
    $result = mysqli_query(getConnection(),$manosql);   //pirma prisijungiam, po to selectinam
    // print_r ($result);
    $resultRow = mysqli_fetch_row($result); //Paverciam i masyva
    // print_r($resultRow);
    if(mysqli_num_rows($result) > 0){    // Tikrinam ar eilucius skaicius rezultate nera 0
        return $resultRow;
    } else {
        echo "ERROR";
    }
    
}

function CreateDoctor ($vardas, $pavarde){
    $vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');   // Saugumo sumetimais uzkoduoja spec simbolius
    $pavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8'); // Saugumo sumetimais uzkoduoja spec simbolius
    $addDoctor = "INSERT INTO doctors
                         VALUES ('','$vardas','$pavarde')";
                         mysqli_query(getConnection(),$addDoctor);
}

function deleteDoctor ($id){
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');   // Saugumo sumetimais uzkoduoja spec simbolius
        $delDoctor = "DELETE FROM  doctors
                         WHERE id = $id";
                         mysqli_query(getConnection(),$delDoctor);
}

function editDoctor ($id, $updateName, $updateLname){
    $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');   // Saugumo sumetimais uzkoduoja spec simbolius
    $updateName = htmlspecialchars($updateName, ENT_QUOTES, 'UTF-8');   // Saugumo sumetimais uzkoduoja spec simbolius
    $updateLname = htmlspecialchars($updateLname, ENT_QUOTES, 'UTF-8');   // Saugumo sumetimais uzkoduoja spec simbolius
    $updateDoctor = "UPDATE  doctors
                     SET name = '$updateName',
                         lname = '$updateLname' 
                         WHERE id=$id";
                     mysqli_query(getConnection(),$updateDoctor);
}

function getAllDoctors ($nr) {
    $selectDoctors = "SELECT * FROM doctors WHERE id = '$nr'; ";
    $result = mysqli_query(getConnection(),$selectDoctors);   //pirma prisijungiam, po to selectinam
    
    $resultRow = mysqli_fetch_row($result); //Paverciam i masyva
    while ($resultRow = mysqli_fetch_row($result)) {
        echo ($resultRow[0]);
    }};
    
    
    
    // if(mysqli_num_rows($result) > 0){    // Tikrinam ar eilucius skaicius rezultate nera 0
    //         return $resultRow;
    //     } else {
    //         echo "ERROR";
    //     }
    // }


// editDoctor(2,"Jonas","Janauskas")
// deleteDoctor(6);
// CreateDoctor ("Tautvydas","Tautvydauskas");



?>