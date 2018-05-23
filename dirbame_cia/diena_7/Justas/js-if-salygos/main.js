// console.log("Labas ");
//
// // =================if  teorija================
// if ( true ) {
//     console.log("labas");
// }
//
// var x = 9;
// var minPrekiuSkaicius = 500;
//
// if ( x < minPrekiuSkaicius ) {
//     console.log("reikia uzsakyti daugiau prekiu");
// } else  if( x > 10000 ){
//     console.log("padidinti reklamas ir ijungti nuolaidas");
// } else {
//     console.log("kasdienine prekyba");
// }
// // pardavimas - atvaizdavimas
// if ( minPrekiuSkaicius > 0) {
//     console.log("atspauzdinu preke");
// }


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

// =================================
//
// var vardas1 = "Tomas";
// var vardas2 = "Karolis";
//
// if ( vardas1 == "Tomas" ) {
//
//     // ar vardai nelygus
//     if ( vardas1 != vardas2 ) {
//         console.log("vardai yra skirtingi " + vardas1 + vardas2);
//     } else {
//         console.log("vardai vienodi " + vardas1 + vardas2);
//     }
// }
// // ================================
//
//
//
// // B)
// // Papildomai patikrinti uzdavini A.
// // Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
//
// // ============================
//
// if ( vardas1 == "Tomas" ) {
//     console.log("Sveikas " + vardas1 );
// } else {
//     console.log("tu ne Tomas");
// }
//
// // ======================================
//
// // C)
// // Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
//
// if ( vardas1 == "Tomas" && vardas2 == "Karolis" ) {
//     console.log("labas Tomai ir Karoli");
// } else {
//     console.log("cia kazkas kitas");
// }
//
//
//
// // D)
// // Patikrinti ar bent vienas is vardu "Tomas"
// // || - arba
//
// if ( vardas1 == "Tomas" || vardas2 == "Tomas" ) {
//     console.log("kazkuris is jusu Tomas");
// }
//
//
//
// // 1 UZDUOTIS
// // turesime vartotojo amziu
// // var age = 24;
// // gapal ji, turesiem isvesti tam tikra reklamos teksta
//
//
// // =============================
//
// var age = 5;
//
// if ( age < 7 || age > 65 ) {
//     console.log("Sokoladiniai zuikuciai 20% nuolaida");
//
//     if ( age <= 7 ) {
//         console.log("Pliusines varles");
//     } else if ( age > 65 ) {
//         console.log("kelione i Bristona");
//     }
//
// } else if ( age > 7 && age <= 14 ) {
//         console.log("Mini telefonai");
//     } else if ( age > 14 && age <= 18 ) {
//         console.log("new Music App");
//     } else if ( age > 18 && age <= 24 ) {
//         console.log("Stok i sauliu sajunga");
//     } else if ( age > 24 && age <= 65 ) {
//         console.log("Pensijos kaupimas - usiregistruok");
//     }

// ==================================



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


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

// ===========================

var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 = "Airidas";

var pirkejas = "betkas";


if (pirkejas == vardas1) {
    console.log("Masinoms 10% nuolaida");
} else if (pirkejas == vardas2) {
    console.log("Buitinei technikai  30% nuolaida");
} else {
    console.log("5% nuolaida kelionems");
}


// ==========================
// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

// ======================================

var klientoTipas1 = "bronze";
var klientoTipas2 = "silver";
var klientoTipas3 = "gold";

var klietoTipas = "ketkas";

if (klietoTipas == klientoTipas1) {
    console.log(" 15% nuolaida");
} else if (klietoTipas == klientoTipas2) {
    console.log(" 30% nuolaida");
} else {
    console.log(" 5% nuolaida");
}

// =========================================
