console.log("Labas ");

//1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
var a = "azuolas";
for (var i = 0; i < 50; i++) {
  console.log( a);
}

// 1.1 UZDUOTIS
    // isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
document.querySelector('h3').innerHTML = "Azuolas";
// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
for (var i = 0; i < 10; i++) {
  document.querySelector('article').innerHTML +=  "<h2> Azuolas</h2>  ";
}

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)
function printX(x) {
  document.querySelector('.uzduotis1').innerHTML += x;
}
printX("mopedas");
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for (var i = 0; i < 25; i++) {
  printX("mopedas");
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// paveikslelius
var nuotrauka = "<img src='img/1.jpg'class='img-fluid' alt='suo su slepete'>" //keliame kaip nuotrauka, bet naudojame kitas kabutes sutvarkyti elementus
for (var i = 0; i < 12; i++) {
  printX(nuotrauka);
}
//arba
for (var i = 0; i < 6; i++) {
  printX("<img src='img/1.jpg' alt='suo su slepete'>")
}
// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

var piestiEilute = "";
//galima ilgi 40 i kintamaji var ilgis = 40
for (var i = 0; i < 40; i++) {
  piestiEilute = piestiEilute + "-"; // arba galima rasyti piestiEilute += "-"
}
console.log( piestiEilute);

function functionName() {
  console.log(" vardas / pavarde / amzius");
}
functionName();

console.log( piestiEilute);// galima naudoti funkcija eilutei kurti, kuria galima lengvai paleisti

var spausdintiStulpeli = "|";
 for (var i = 0; i < 10; i++) {
  console.log(spausdintiStulpeli);
 }

//   piestiEilute(40);
// console.log( " vardas / pavarde / amzius");
// piestiEilute(40);
// spausdintiStulpeli(10);



// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
