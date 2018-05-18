// console.log("Labas");
//
// var name = "Ovidijus";
// console.log(name);
// console.log(name);
//
// name = "Tomas";
// console.log(name);
//
// var sk = 0;
// console.log("Skaicius: ", sk, sk, name, sk);
//
// sk = (10 + 50) / 2; //30
// console.log("Skaicius: ", sk);
//
//
// function sugalvotasPavadinimas()   {
//   console.log("Pradedu blynus");
//   console.log("Iskepiau blynus");
//   console.log("Baigiu blynus");
// }
//
// sugalvotasPavadinimas();


//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

var vardas = "Ovidijus";
var pavarde = "Kutkaitis";
var amzius = 28;
var atlyginimas = 550;
console.log(" Vardas :", vardas, " Pavarde :", pavarde," Amzius :", amzius," Atlyginimas :", atlyginimas);

console.log(typeof(vardas));
console.log(typeof(pavarde));
console.log(typeof(amzius));
console.log(typeof(atlyginimas));
//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" ,
 // kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
  console.log("Vardas: ",vardas);
  console.log("Pavarde: ",pavarde);
  console.log("Amzius: ",amzius);
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu
// (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
var pajamos = atlyginimas * 12;
  console.log("Metines pajamos: ",pajamos);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Kursiu";
var pastoKodas = 33268;

function printAddressData(){
  console.log(salis);
  console.log(miestas);
  console.log(adresas);
  console.log(pastoKodas);
}
printAddressData();

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x){
  console.log(x);
}
printTekstas("Jokubo istorijos");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x,y) {
var suma = x*y;
console.log("Sudauginus", x,y,"gauname",suma);
}
daugyba(100,5);
