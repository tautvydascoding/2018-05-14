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

var manoHeader = document.createElement("Header");
// cia yra kintamasis, jis neideda elemento i dom'a (tai reikes padaryti patiems su appendChild)

// var manoHeader = document.querySelector("header");

console.log( manoHeader );

var manoTekstas = document.createTextNode("labas");

manoHeader.appendChild(manoTekstas);
manoBody.appendChild(manoHeader);

// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)
manoHeader.appendChild(manoTekstas);
// a) surasti body

document.querySelector


// 3. i susikuta 'header' objekta idedame 'tekstas' objekta
// test
// console.log(  manoHeader );

var manoAside = document.querySelector("aside");
document.body.insertBefore(manoHeader, manoAside);


// 4. headeri idesime po H1
//        tetis                kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );
