console.log("labas");
// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }

if ( true ) {
    console.log("labas");
}

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


var x = 100;
var minimalusAtsarguSkaicius = 150;


if ( x < minimalusAtsarguSkaicius ) {
  console.log("reikia uzsakyti daugiau prekiu");
} else {
  console.log("pardavinejame");
}




var x = 7000000;
var minimalusAtsarguSkaicius = 600;


if ( x < minimalusAtsarguSkaicius ) {
  console.log("reikia uzsakyti daugiau prekiu");
} else if( x > 10000) {
  console.log("padidinti reklamas ir ijungti nuolaidas");
} else {
    console.log("iprastine prekyba");
}


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Antanas";
if (vardas1 == vardas2) {
  console.log("vardai sutampa");
} else  {
  console.log( "vardai yra skirtingi");
}
// arba

var vardas1 = "Tomas";
var vardas2 = "Antanas";
// ar vardai nelygus patikrinam su !=
if (vardas1 != vardas2) {
  console.log(vardas1, vardas2, "abu vardai NEvienodi");
} else  {
  console.log(vardas1, vardas2, "vardai yra vienodi");
}



// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
console.log("tikrinsiu ar vardas1 yra: Tomas ir pasisveikinsiu");

if (vardas1 == "Tomas") {
  console.log("labas" + vardas1 );
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

console.log("tikrinsiu ar vardai yra: Tomas ir Karolis");

var vardas1 = "Tomas";
var vardas2 = "Karolis";


if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    document.write("vardai yra: Tomas ir Karolis <br>");
} else {
    document.write("!! vardai Nera: Tomas ir Karolis <br>");
}



// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
console.log("tikrinsiu ar bent vienas yra vardu: Tomas ");

var vardas1 = "Tomas";
var vardas2 = "Karolis";


if(vardas1 == "Tomas" || vardas2 == "Tomas") {
  console.log( "vienas is vardu yra Tomas", vardas1, vardas2);
} else {
  console.log("!! Nera Tomo, vardas1, vardas2");
}




console.log( "Darysiu ilgaja uzduoti" );

// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
var age = 14;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"


if ( age < 7 ) {
  console.log("pliusines varles");

} else if ( 7 <= age && age < 14 ) {
  console.log("Mini telefonai");
} else if ( 14 <= age && age < 18 ) {
  console.log( "new music app");
} else if ( 18 <= age && age > 24 ) {
  console.log( "Stok i sauliu sajunga");
} else if ( 24 <= age && age > 65 ) {
  console.log( "Pensijos kaupimas - zusiregistruok");
} else if ( 65 <= age  ) {
  console.log( "kelione i Bristona");
}


//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"



// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
console.log( "antra uzduotis" );



var klientas = "Tomas";

var vardas1 = "Tomas";
var vardas2 = "Airidas";
var vardas3 = "Paulius";

if (klientas == vardas1) {
  console.log( "Masinoms 10% nuolaida");
} else if (klientas == vardas2) {
  console.log("Buitinei technikai  30% nuolaida");
} else {
  console.log("5% nuolaida kelionems");
}


// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
