console.log("Labas ");



var x = 1000;
var minimalisPrekiuSkaicius = 100;
if(x <= minimalisPrekiuSkaicius){
  document.write("Reikia uzsakyti daugiau prekiu.<div>");
}else if (x > 1000) {
  document.write("Pdidinti reklama.<div>");
}else {
  document.write("Pardavinejame.<div>");
}
// Pardavimas
 if(minimalisPrekiuSkaicius > 0){
   document.write("Prekes pardavimas.<div>");
 }


// 1
 var vardas1 = "Tomas";
 var vardas2 = "Antanas";

 if (vardas1 != vardas2) {
   document.write(vardas1 + " " + vardas2 + " Vardai nelygus.<div>");
 }else {
   document.write(vardas1 + " " + vardas2 + " Vardai lygus.<div>");
 }

 if(vardas1 == vardas2){
   document.write(vardas1 + " " + vardas2 + " Vardai vienodi.<div>");
 } else {
   document.write(vardas1 + " " + vardas2 + " Vardai yra skirtingi.<div>");
 }
 // 2
 var vardas1 = "Tomas";
 var vardas2 = "Antanas";
if (vardas1 == "Tomas") {
   document.write("Sveikiname " + vardas1 + "<div>" );
}else {
  document.write("Vardas netinkamas.<div>");
}
// 3

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  document.write("Salyga tenkinama.<div>");
}else {
  document.write("Salyga netenkinama.<div>");
}
// 4

if (vardas1 == "Tomas" || vardas2 == "Tomas") {
  document.write("Vardas Tomas yra.<div>");
}else {
  document.write("Vardo Tomas nera.<div>");
}
///////////////////////2Uzduotis///////////////////////////////

var age = 7;
if (age < 7 || age > 65) {
  document.write("Sokoladiniai zuikuciai 20% nuolaida.<div>");
  if (age < 7) {
    document.write("Pliusines varles.<div>");
  }else if (age > 65) {
    document.write("Kelione i Bristona.<div>");
  }
}else if (age >= 7 && age < 14) {
  document.write("Mini telefonai.<div>");
}else if (age >= 14 && age < 18) {
  document.write("New Music App.<div>");
}else if (age >= 18 && age < 24) {
  document.write("Stok i sauliu sajunga.<div>");
}else if (age >= 24 && age < 65) {
  document.write("Pensijos kaupimas - zusiregistruok.<div>");
}

/////////////////////////3Uzduotis//////////////////////////////

var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 = "Airidas";
var pirkejas = "Tomas";

if(pirkejas == "Tomas"){
  document.write(pirkejas + " Masinoms 10% nuolaida.<div>");
}else if (pirkejas == "Paulius") {
  document.write(pirkejas + " Buitinei technikai  30% nuolaida.<div>");
}else {
  document.write(pirkejas + " 5% nuolaida kelionems.<div>");
}
//////////////////////////4Uzduotis/////////////////////////////

var tipas1 = "Gold";
var tipas2 = "Silver";
var tipas3 = "Bronze";
var klientoTipas = "Gold";

if(klientoTipas == "Gold"){
  document.write(klientoTipas + " 30% nuolaida.<div>");
}else if (klientoTipas == "Silver") {
  document.write(klientoTipas + " 15% nuolaida.<div>");
}else {
  document.write(klientoTipas + " 5% nuolaida.<div>");
}
