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
  console.log(vardas);
  console.log(pavarde);
  console.log(amzius);
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu
// (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
  pajamos = atlyginimas * 12;
  console.log(pajamos);
}
printMetinisPajamuDydis();
