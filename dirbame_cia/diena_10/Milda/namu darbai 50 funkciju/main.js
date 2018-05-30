
// pasikartoti IF
//
// sukurti js zaidima, popierius , akmuo, zirkles :
// https://www.codecademy.com/courses/javascript-beginner-en-Bthev-mskY8/0/1


// pasikartoti antradieni
// parasyti f-ja "getPelnas(pajamos, mokesciai, mokesciai2)", kuri apskaiciuoja pelna is  paduotu pajamu atimdama paduotus mokescius, ir poto vel atimdama mokescius2
// pajamos 1500, mokesciai 2.5%, mokesciai2  1.5%
function getPelnas (pajamos, mokesciai, mokesciai2) {
}

// pasikartoti IF
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
var pirkejas = "Tomas";

var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 = "Airidas";

if (pirkejas==vardas1) {
  console.log("Masinoms 10% nuolaida");

}

if (pirkejas==vardas2) {
  console.log("Buitinei technikai  30% nuolaida");
}

if (pirkejas==vardas3) {
  console.log("5% nuolaida kelionems");
}


// itvirtinti f-jas

// UZDUOTIS =======ismokti f-jas 50x===============
// A) sukurti kintamaji "vardas" Tomas
// B) sukurti 50 f-ju.
// nelyginiu (1,3,5,...) funkciju pavadinimai getVardas1(), getVardas3(), ...
// nelygines f-jos turi "return" ir iskvietus turi grazinti varda ir jo skaiciu salia pvz: "Tomas1"
// lyginiu (2,4,6,8...) funkciju pavadinimai setVardas2(name), setVardas4(name), ...
// lygines f-jos turi pakeisti varda ir uzdeti skaiciu salia
// NOTE: visas f-jas iskviesti
// pvz.:
var vardas = "Tomas";
// 1
function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );

// 2
function setVardas2(name) {
   vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

// 3
function getVardas3() {
  return vardas + "3";
}
x =  getVardas3();  // arba  console.log(  getVardas3() );
console.log(  x );

// 4
function setVardas4(name) {
   vardas = name + "4";
}
setVardas2("juozas"); // sugalvoti vis kita zodi

// 5
function getVardas5(){
  return vardas + "5";
}
x= getVardas5();
console.log(x);

// 6
function setVardas6(name) {
  vardas=name +"6";
}
setVardas6("Bernardas");

// 7

function getvardas7() {
  return vardas + "7";
}
x=getvardas7();
console.log(x);

// 8
function setVardas8(name) {
  vardas=name + "8";
}
setVardas8("Agota");

// 9
function getvardas9() {
  return vardas + "9";
}
x=getvardas9();
console.log(x);

// 10
function setVardas10(name) {
  vardas=name + "10";
}
setVardas10("Birute");

// 11
function getVardas11() {
  return vardas + "11";
}
x=getVardas11();
console.log(x);

// 12
function setVardas12(name) {
  vardas=name + "12";
}
setVardas12("Rasa");
