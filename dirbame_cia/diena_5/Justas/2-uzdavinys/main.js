console.log("Labas ");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas


// ===============sprendziu==================

var vardas = "Justas";
var pavarde = "Prekevicius";
var amzius = 25;
var atlyginimas = 100;

// =================baigiau spresti==========
// ==========================================

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa

console.log(typeof(vardas));
console.log(typeof(pavarde));
console.log(typeof(amzius));
console.log(typeof(atlyginimas));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius


// ==================sprendziu===============

function printVardasPavardeAmzius() {
    console.log("vardas: ", vardas);
    console.log("pavarde: ", pavarde);
    console.log("amzius: ", amzius);
    console.log("atlyginimas: ", atlyginimas);
}
printVardasPavardeAmzius();

//===========baigiu==========================
// ==========================================

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

// ==========sprendziu=======================

function printMetinisPajamuDydis() {
    var alga = atlyginimas * 12;
    console.log("metines pajamos= ", alga);
}
printMetinisPajamuDydis(); //iskvietimas

// ================baigiu====================
// ==========================================

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// =============sprendziu====================

var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Taikos pr 56";
var pastoKodas = "7287964";

function printAddressData() {
    console.log(salis);
    console.log(miestas);
    console.log(adresas);
    console.log(pastoKodas);
}
printAddressData();

// ============baigiu========================
// ==========================================

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

// ==============pradedu=====================

function printTekstas(x) {
    console.log(x);
}
printTekstas("Jokubo istorijos");
printTekstas("Justo istorijos");
printTekstas(true);
printTekstas(56);
printTekstas(null);

// ===========baigiu=========================
// ==========================================

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

// ===============pradedu====================

function daugyba (x, y) {
    var z = x * y;
    console.log("sudauginus gausime atsakyma: ", z);
}
daugyba (10, 2);
daugyba (5, 2);

// ============pabaiga=======================
// ==========================================

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

// ================pradzia===================


function pitagoras (x, y) {
    var c = (x * x) + (y * y);
    console.log("pitagoras lygus: ", c);
}
pitagoras (2, 6);

// ================pabaiga===================
// ==========================================

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
