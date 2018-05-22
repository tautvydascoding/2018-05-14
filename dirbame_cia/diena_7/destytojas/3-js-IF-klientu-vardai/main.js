console.log("Labas ");



// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
var klientas = "Karolis Putonas";

var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 =  "Airidas";

if ( klientas == vardas1) {
    document.querySelector('h1').innerHTML += "<p> Masinoms 10% nuolaida </p>";
} else if ( klientas == vardas2) {
    document.querySelector('h1').innerHTML += "<p> Buitinei technikai  30% nuolaida </p>";
} else   {
    document.querySelector('h1').innerHTML += "<p> 5% nuolaida kelionems nuolaida </p>";
}



// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
