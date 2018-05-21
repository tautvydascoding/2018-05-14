console.log("Labas ");



//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

// f-jos kurimas
function printKaina( kaina ) {
    document.write( "<div> Prekes kaina:" + kaina + "</div>");
}
// iskvietimas
printKaina( 999.00 );
printKaina( 13.49 );
printKaina( 100.05 );
// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
    var x1 = 1;
    var x2 = 10;
    var x3 = 8;
    var x4 = 6;
    var x5 = 8;
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    console.log( "vidurkis1: " + vidurkis );
}
// paleidimas
pazymiuVidurkis();
pazymiuVidurkis();
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5, vardas) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    document.querySelector('h1').innerHTML +=   vardas + vidurkis;
    // arba
    console.log(  vardas + " Vidurkis:" + vidurkis  );
}
pazymiuVidurkis1(1, 9, 9 , 8 , 9, "Petriukas" ); // periukas
pazymiuVidurkis1(8, 9, 9 , 8 , 10, "Marius" ); // marius
pazymiuVidurkis1(3, 4, 5 , 5 , 7, "juozapas" ); // juozapas
