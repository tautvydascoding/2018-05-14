console.log("Labas ");

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
var x = getVardas1(); // arba  console.log(  getVardas1() );
console.log(x);

// 2
function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("Antanas"); // sugalvoti vis kita zodi

// 3
function getVardas3() {
    return vardas + "3";
}
x = getVardas3(); // arba  console.log(  getVardas3() );
console.log(x);

// 4
function setVardas4(name) {
    vardas = name + "4";
}
setVardas2("juozas"); // sugalvoti vis kita zodi

function getVardas5() {
    return vardas + "5";
}
x = getVardas5();

function SetVardas6(name) {
    vardas = name + "6";

}
setVardas4("Alojyzas");

function getVardas7() {
    return vardas + "7";

}
x = getVardas7();
console.log(x);

function setVardas8(name) {
    vardas = name + "8";
}
SetVardas6("Martynas");

function getVardas9(x) {
    return vardas+ "9";
}
x=getVardas9();
console.log(x);

function setVardas10(name) {
    vardas=name +"10";
}
setVardas10("Jurgis");

function getVardas11(x) {
    return vardas+"11";
}
x=getVardas11();
console.log(x);
