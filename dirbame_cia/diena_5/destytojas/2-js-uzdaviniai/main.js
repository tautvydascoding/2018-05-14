console.log("Labas ");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

var vardas = "Laura";
var pavarde = "Laurauskaite";
var amzius = 39;
var atlyginimas = 550;

// teo:
//  typeof( x ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

 console.log(   vardas   );
 console.log(   vardas   );
 console.log(   vardas   );
 console.log(   vardas   );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log("vardas: ", vardas);
    console.log("pavarde: ", pavarde);
    console.log("amzius: ", amzius);
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    var alga = atlyginimas * 12;
    console.log("metines pajamos: ", alga );
    // console.log(  'TEKSTAS', atlyginimas * 12   );
}
// iskvietimas
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(   manoTekstas ) {
    console.log( manoTekstas  );
}
printTekstas( "Jurgutes balade" );
printTekstas( "megstamiausia antraste ...." );
printTekstas( null );
printTekstas( 8 );

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x, y) {
    var ats = x * y;
    console.log( "sudauginus ", x , y , " gausime: ", ats);
}
daugyba(100, 5);
daugyba(0.05, 2);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
