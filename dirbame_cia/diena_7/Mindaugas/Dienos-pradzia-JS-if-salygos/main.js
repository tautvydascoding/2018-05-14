//pvz.
 var x = 100;
 var minnimalusAtsarguSkaicius = 100;

 if(x < minnimalusAtsarguSkaicius ) {
   console.log("reikia uzsakyti daugiau prekiu");
 } else if(x > 10000){
   console.log("padidinti reklamas ir ijingti nuolaidas");
 } else ("pardavinejame"); //klaida, reikejo console.log prirasyti

if (minnimalusAtsarguSkaicius > 0) {
  console.log("Prekes pardavimas: kaina");
}
//0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
var vardas1 = "Tomas";
var vardas2 = "Antanas";
// ar vardai nelygus
if ( vardas1 == vardas2 ) {
  console.log( "Jie lygus: pasiektas komunizmas");
} else {
  console.log(vardas1, vardas2,"kapitalizmas nugalejo");
}

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if (vardas1 == "Tomas") {
  console.log("Sveikas Tomai");
}
//galime spresti kitaip
if (vardas1 == "Tomas ")
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
//naudojme and patikrinti abiem
console.log("tikrinsiu ar vardas Tomas  ir Kalrolis");
if  (vardas1 == "Tomas" && vardas2 == "Karolis") {
  console.log( "vardai atitinka salyga");
} else {
  console.log("vienas is vardu ar abu neatitinka salygos");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
if ( vardas1 == "Tomas" || vardas2 == "Tomas") {
  console.log("radome varda");
}
// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
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

var age = 16;

if ( age < 7 || age >= 65) { // galime trumptinti su else senjorams prie sholokadiu zuikiu
  console.log("Sokoladiniai zuikiai");
}

 if (age < 7) {
  console.log("Pliusines varles");
} else if ( age < 14) {
  console.log("Mini telefonai");
} else if ( age < 18) {
  console.log("new Music App");
} else if ( age < 24) {
  console.log("Stok i sauliu sajunga");
} else if ( age < 65) {
  console.log( "Pensijos kaupimas - uzsiregistruok");
} else if ( age >= 65 ) {
  console.log("kelione i Birstona");
}
// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
var klientas = "Paulius";
var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 = "Airidas";
//nustatome ar klienentas yra vardus x, viska darome su kintamaisiai
if (klientas == vardas1) {
  console.log("Masinoms 10% nuolaida");
} else if (klientas == vardas2) {
  console.log("Buitinei technikai 30% nuolaida ");
  document.querySelector('h1').innerHTML += "<p>Buitine technika</p>"
} else {
  console.log( "5% nuolaida kelionems");
}

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
