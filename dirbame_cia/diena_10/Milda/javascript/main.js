// Mes kuriame taip textnoda

document.querySelector("h1").innerHTML += "idedu si teksta";


// naujo elemento kurimas (js)

var manoelementas = document.createTextNode("Sita teksta sukuriau");
var manoBody = document.querySelector("body");


// cia yra testavimas
console.log("mano elementas:", manoelementas);
// console.log("mano Body:", manoBody);


manoBody.appendChild(manoelementas);
// _____________________________Sukuria objekta node'a __________________________

var manoFooter=document.createElement("footer");
console.log(manoFooter);
// _____________________________________________________________________________


// 1. sukurti "header"  DOM objekta/NODE'a document.createElement
// test
// console.log(  manoHeader );

var elementas = document.createTextNode("headersukurimas");
var manoHeader = document.querySelector("header");

console.log("elementas:", manoHeader );






// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)


// 3. i susikuta 'header' objekta idedame 'tekstas' objekta
// test
// console.log(  manoHeader );

// 4. headeri idesime po H1
//        tetis                kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );
