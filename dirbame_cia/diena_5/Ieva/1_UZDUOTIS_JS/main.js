console.log("1 UŽDUOTIS");


//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa

var vardas = "Ieva";
var pavarde = "Drevinskiene";
var amzius = 37;
var atlyginimas = 1000;

console.log(vardas, pavarde, amzius, atlyginimas); /// sarasas isvedamas
console.log(vardas, pavarde, amzius, atlyginimas);
console.log(vardas, pavarde, amzius, atlyginimas);
console.log(typeof (vardas), typeof(pavarde), typeof(amzius), typeof(atlyginimas));




console.log("2 UŽDUOTIS:");
//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius () {
  console.log("Vardas:", vardas, "Pavardė:", pavarde, "Amžius:", amzius, "Atlyginimas:", atlyginimas);
}
printVardasPavardeAmzius();



console.log("3 UŽDUOTIS");
//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis () {
  var pajamos = atlyginimas * 12; //// atlyginimas
  console.log("Metinės pajamos:", pajamos);
}
printMetinisPajamuDydis();


function printMetinisPajamuDydis () {
  console.log("Metinės pajamos:", atlyginimas * 12, "Eur" );
}
printMetinisPajamuDydis();



console.log("4 UŽDUOTIS");
//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Šilainiai";
var pastoKodas = 54460;

// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

function printAddressData () {
  console.log("Šalis:", salis,  "Miestas:", miestas, "Adresas:", adresas, "Pašto Kodas:", pastoKodas);
}
printAddressData();


console.log("5 UŽDUOTIS");
// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas (x) {
  console.log(x);
}
printTekstas("Jobūko istorijos");
printTekstas(false);
printTekstas(null);

console.log("6 UŽDUOTIS");
// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugybaDvieju (x, y) {
  var atsakymas = x*y;
  console.log(atsakymas);
}
daugybaDvieju(5,6);


// antras būdas//
function daugybaDvieju (x, y) {
  var ats = x * y;
  console.log("Sudauginus šiuos skaičius:", x, "ir",  y, "gausime atsakymą:", ats);
}
daugybaDvieju(5,6);
daugybaDvieju(0.05,2);




console.log("7 UžDUOTIS");
// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y


function pitagoroTeorema (x, y) {
var  rezultatas = ( x * y ) + ( y * y);
  console.log("Ilgoji trikampio kraštinė:", rezultatas);
}
pitagoroTeorema(2, 4);


//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
