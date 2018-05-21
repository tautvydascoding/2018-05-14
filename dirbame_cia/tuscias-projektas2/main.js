console.log("Labas ");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// IDEA: typeof (x) padeda nustatyti koks kintamasis yra
var vardas = "Laura";
var pavarde = "Laurutele";
var amzius = "40";
var atlyginimas = "550";

console.log( typeof(vardas));


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}
printVardasPavardeAmzius();
//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    console.log( atlyginimas * 12 );
}
printMetinisPajamuDydis();
//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
var salis = "Lietuva";
var miestas = "Mazeikiai";
var adresas = "Vysniu 5";
var pastoKodas = "1111";

function printAddressData() {
    console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData();
// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(x) {
    console.log(x);
}
printTekstas("Jokubo istroijos");
printTekstas("megstu kojnes");
// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba(x, y) {
    console.log( x * y);
}
daugyba(23, 24);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y
function pitagoroTeorema(x, y) {
    console.log( (x * x) + (y * y));
}
pitagoroTeorema(3, 4);
//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
// IDEA: galima ir taip daryti!!!!
// function printMetinisPajamuDydis() {
//     var alga = atlyginimas * 12;
//     console.log("metines pajamos:", alga);
// }
// printMetinisPajamuDydis();
