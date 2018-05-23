console.log("labas");
//  1 UZDUOTIS

// sukurti kintamuosius (ir jiems priskirti reiksmes):

// vardas, pavarde, amzius, atlyginimas

var vardas = "Deividas";
var pavarde = "Zukauskas";
var amzius = 26;
var atlyginimas = -100;

console.log(  vardas  );
console.log(  pavarde  );
console.log(  amzius  );
console.log(  atlyginimas  );


// teo:
//  typeof( x ); f-ja kuri isveda kintamojo tipa Log

console.log(  typeof(vardas)  );
console.log(  typeof(pavarde)  );
console.log(  typeof(amzius)  );
console.log(  typeof(atlyginimas)  );


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
  atlyginimas = ((-100) * 12);
  console.log("atlyginimas:", atlyginimas);
}

printMetinisPajamuDydis();


//  4 UZDUOTIS

// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas

// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// ---- advance-----
var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Savanoriu pr. 393";
var pastoKodas = "kaskokie skaiciai 777";

function printAddressData() {
  console.log('salis:',"Lietuva" );
  console.log('miestas:', "Kaunas");
}

printAddressData();

//  5 UZDUOTIS

// sukurti funkcija "printTekstas(x)" ,

//  kuri atspausdina i konsole "x" reiksmes

// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

var x = "Jokubo istorijos";

function printTekstas(x) {
  console.log(x);
}

printTekstas(x);

//  arba
function printTekstass( manoTekstas) {
  console.log( manoTekstas);
}

printTekstass ( "manoTekstas");
printTekstass ( "kaskas" );
printTekstass ( "tekstas" );


// 6 UZDUOTIS

// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugybaXkartY(x, y) {
  var ats = x * y;
  console.log("sudauginus", x,"ir", y, "gausime:", ats);
}
daugybaXkartY(5, 5);
daugybaXkartY(5, 4,);




// 7 UZDUOTIS

// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)

// pitagoroTeorema(x, y)      x*x + y*y


function pitagoroTeorema(x, y) {
  console.log( (x*x) + (y*y));
}
pitagoroTeorema(4, 2);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================

// ant lentos
