//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginima

var vardas = "Karolina";
var pavarde = "karoliuke";
var amzius = 20;
var atlyginimas = 600.0;

console.log(vardas, pavarde, amzius, atlyginimas);
// console.log(vardas, pavarde, amzius, atlyginimas);
console.log( typeof(vardas));
console.log( typeof(pavarde));
console.log( typeof (amzius));
console.log( typeof (atlyginimas));

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
  console.log(vardas, pavarde, amzius, atlyginimas);
}
printVardasPavardeAmzius();


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")


function printMetinisPajamuDydis() {
pajamos = atlyginimas * 12;
console.log(pajamos);
}
printMetinisPajamuDydis ();
// iskvietimas yra funkcijos pavadinimas

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "Australija";
var miestas = "Kaunas";
var adresas = "Liepualeja";
var pastoKodas = 56111;

function printAddressData () {
  console.log( salis, miestas, adresas, pastoKodas );
}
printAddressData ();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {

  console.log(x);
}
 printTekstas ("Jokubo istorijos");



// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"


function daugyba (x, y) {
  var rezultatas = x * y ;
  console.log(rezultatas);
}
daugyba (2, 4);

// antras variantas
function daugyba (x, y) {
  var ats = x * y;
  console.log( "sudauginus", x , y, "gausime:" , ats);
}
daugyba (100,5);
daugyba (0.05, 2);


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema (x, y) {
rezultatas = x * x + y * y ;
console.log(rezultatas);
}
pitagoroTeorema (4, 8);


//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
