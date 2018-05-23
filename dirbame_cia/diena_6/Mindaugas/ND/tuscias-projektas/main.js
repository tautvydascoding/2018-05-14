console.log("Labas ");

var  car = ["sabb", "volvo", "BMW"];
console.log( car);
document.write( car );

// document.getElementById("demo").innerHTML = car; //o kaip jei nori pagal klase gauti?

document.querySelector('p').innerHTML = car;

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
setVardas4("juozas"); // sugalvoti vis kita zodi
//5
function getVardas5() {
    return vardas + "5";
}
console.log( getVardas5());
//arba
var x = getVardas5();
console.log(x);

//6
function setVardas6(name) {
  vardas = name + "6"
}
setVardas6("Tomas");

//7
function getVardas7() {
  return vardas + "7";
}
console.log( getVardas7());

//8
function setVardas8(name) {
  console.log( name);
  vardas = name + "8"
}
setVardas8("Tadas");

//9
function getVardas9() {
  return vardas + 9;
}
console.log( getVardas9());

//10
function setVardas10(name) {
  vardas = name + "10";
}
setVardas10("Mindaugas");

//11
function getVardas11() {
  return vardas + "11";
}
console.log(getVardas11());

//12
function setVardas12(name) {
  vardas = name +"12";
}
setVardas12("Jonukas");

//13
function getVardas13() {
  return vardas + "13";
}
console.log( getVardas13());
