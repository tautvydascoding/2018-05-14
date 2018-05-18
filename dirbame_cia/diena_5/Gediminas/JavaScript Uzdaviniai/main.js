console.log("Labas ");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa

var vardas= "Jonas" ;
var pavarde= "Jonaitis" ;
var amzius= "40" ;
var atlyginimas= "500" ;

console.log( "Duomenys" , vardas, pavarde, amzius, atlyginimas);



//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius


function printVardasPavardeAmzius() {
    console.log( "vardas:", vardas );
    console.log( "pavarde:", pavarde );
    console.log( "amzius:", amzius );
}

printVardasPavardeAmzius ();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    var alga= atlyginimas * 12;
    console.log( "metines pajamos:", alga );

}

printMetinisPajamuDydis ();



//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas( manoTekstas ) {
    console.log( manoTekstas );
}
printTekstas ( "Balade");
printTekstas ( "megstamiausia antraste ...");
printTekstas ( "sninga tik ziema");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x, y,) {
    var ats = x * y;
    console.log( "sudauginus" , x , y , "gausime:" , ats);

}

daugyba(100, 5);
daugyba(0.05, 2, "sudauginus gausime");


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
