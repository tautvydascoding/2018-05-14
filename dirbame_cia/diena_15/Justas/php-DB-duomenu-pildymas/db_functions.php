<?php
    define('DB_PAVADINIMAS', 'hospital5');
    define('BD_VARTOTOJAS', 'root');
    define('BD_SLAPTAZODIS', 'root');
    define('BD_HOST', 'localhost');

    $prisijungimas = mysqli_connect(BD_HOST, BD_VARTOTOJAS, BD_SLAPTAZODIS, DB_PAVADINIMAS);

    mysqli_set_charset($prisijungimas, "utf8");//kad kai paims is BD neuzkoduotu kaip nors kitaip


//11111111111111111111111111111111111111111111111111111111111111111111111
function getPrisijungimas() {
    global $prisijungimas;//pasiima global reiksme
    //====================
    if ($prisijungimas == true) {
        echo "<br>";
        return $prisijungimas;//grazina reiksme i funkcija
    }else {
        echo "ERROR nepavyko prisijungti prie DB " . mysqli_connect_error() . "<br>";
        return NULL;
    }
}
getPrisijungimas();

//gydytojo paemimas is DB2222222222222222222222222222222222222222222222222222222
function getDoctor($nr) {
    if (!is_numeric($nr)) {
        return NULL;//jei ivestas ne skiacius grazina NULL ir nutruakia funkcija
    }
    $manoSql = "SELECT * FROM doctors WHERE id='$nr'; ";//'$nr' su viengubomis kabutemis veikaia kingtamasis
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSql);//ivykdo sql koda arba kalba, grizta NYSQL OBJEKTAS

    if (mysqli_num_rows($rezultatai) > 0) {
        $rezultatai = mysqli_fetch_assoc($rezultatai);//sita komanda paima sekancios eilutes duomenis, grizta MTSQL ARRAY
        return $rezultatai;
    } else {
        echo "ERROR!! gydytojo nr:  $nr neradome. Bandykite kita <br>"
            .mysqli_error(getPrisijungimas());
        return NULL;
    }
}
// $gydytojas1 = getDoctor();// php masyvas


//dakataro sukurimas333333333333333333333333333333333333333333333333333333333333
function createDoctor($vardas, $pavarde) {
    // $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas)
    // $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde)
    //arba
    $uzkoduotasVardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8)');
    $uzkoduotaPavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8)');

    $manoSQL = "INSERT INTO doctors VALUES ('', '$uzkoduotasVardas', '$uzkoduotaPavarde');";

    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($arPavyko != true) {
        echo "ERROR nepavyko sukurti Gydytojo" . mysqli_error(getPrisijungimas());
    }
}
// createDoctor("Povilas", "Stanaitis");


// daktaro istrinimas

// deleteDoctor(13);


//editinti Daktarus
function editeDoctor($nr, $vardas, $pavarde) {
    $uzkoduotasNumeris = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8)');
    $uzkoduotasVardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8)');
    $uzkoduotasPavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8)');

    $manoSQL = "UPDATE doctors SET name = '$uzkoduotasVardas', lname = '$uzkoduotasPavarde' WHERE id = '$uzkoduotasNumeris' LIMIT 1";
    mysqli_query(getPrisijungimas(), $manoSQL);
}
// editeDoctor(, "Povilas", "Poviliukas");


//get doctors
function getDoctors() {
    $manoSQL = "SELECT * FROM doctors"
    $visiDoctorsObjektas = mysqli_query(getPrisijungimas(), $manoSQL);
    return $visiDoctorsObjektas;
}

//paimam visus gydytojus
$visiDaktarai = getDoctors();
//i masyva idedam viena gydytoja is viso objekto
$gydytojasMasyvas = mysqli_fetch_assoc($visiDaktarai);
print_r($gydytojasMasyvas);
// getDoctors();
// php neuzsidaro-------------------------------------------------------
