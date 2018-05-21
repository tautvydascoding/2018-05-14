
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
var Vardas="Tomas";
var Pavarde="Riabcikovas";
var Amzius=33;
var Atlyginimas=777;
// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(typeof(Vardas));
console.log(typeof(Amzius));


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {console.log("Vardas"); console.log("Pavarde");
    console.log("Amzius");
}
printVardasPavardeAmzius ();
//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis () {var alga=Atlyginimas*12; console.log("metines pajamos:",alga);
}

printMetinisPajamuDydis ();
//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f -ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
var salis="Lietuva";
var miestas="Kaunas";
var adresas="P.Luksio 68-19";
var pastoKodas="49404";

function printAddressData() {

}

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(tekstas) {console.log(tekstas);
    }
    printTekstas ("Jokubo istorijos");
    printTekstas ("Jurgio pasakos");
    printTekstas (8);

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba(x,y) {var ats=x*y;
    console.log("Sudauginus",x, "ir", y,"gausime:", ats);

}
daugyba (100, 5);
daugyba (0.05, 2);










// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y
