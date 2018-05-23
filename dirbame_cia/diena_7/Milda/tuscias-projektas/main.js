
// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
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


var vardas1 = "Tomas";
var vardas2 = "Antanas";
// ar vardai nelygus?
if (vardas1 != vardas2) {
  console.log("abu vardai NEvienodi");
} else {
  console.log("abu vardai vienodi");
}
// kitas atvejis
var vardas1 = "Tomas";
var vardas2 = "Antanas";
// ar vardai nelygus?
if (vardas1 != vardas2) {
  console.log(vardas1, vardas2, "abu vardai NEvienodi");
} else {
  console.log(vardas1, vardas2, "abu vardai vienodi");
}


// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
 if (vardas1 =="Tomas") {
   console.log( "Labas" + "vardas1");
 } else {

 }

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
console.log("uzduotisc");
var vardas3= "Tadas";
var vardas4= "Karolis";

if (vardas3 == "Tomas" && vardas4 == "Karolis") {
  console.log("Taip");
} else {
  console.log("Ne");
}




// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

console.log("patikrinti ar vienas is vardu yra Tomas");
if (vardas3 == "Tomas" || vardas4 == "Tomas" ) {
console.log("bent vienas vardas Tomas");
} else {
  console.log("nera Tomas");
}





// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

var age = 100;
if (age < 7 ){
  if (age < 7 && age> 65) {
  }
  console.log("pliusines varles");
  if (age < 7 ) {
  }
  console.log("sokoladines zuikuciai");
} else  if ( age >7 && age <14){
  console.log("mini telefonai");
} else  if ( age > 14 && age <18){
  console.log("new music App");
} else if ( age > 18 && age <24){
  console.log("Stok i sauliu sajunga");
} else if (age > 24 && age <65) {
  console.log("Pensijos kaupimas - zusiregistruok");
}  else if (age > 65) {
console.log("kelione i Bristona");
}

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

var klientas = "Tomas";

var vardas6 = "Tomas";
var vardas7 = "Paulius";
var vardas8 = "Airidas";



if (klientas == vardas6) {
console.log("Masinoms 10% nuolaida");
}
else if (klientas == vardas7) {
  console.log("Buitinei technikai  30% nuolaida");
}
else   {
  console.log("5% nuolaida kelionems");
}







// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
