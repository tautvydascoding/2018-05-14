console.log("Labas ");

// document.querySelector('h1').innerHTML+="Idedu teksta";
//
// naujo elemento kūrimas JS
//
// var manoElementas = document.createTextNode('Lorem ipsum dolor sit amet, sed. ');
var manoBody = document.querySelector('body');
//
// console.log(manoElementas); ///testavimui ar veikia
// console.log(manoBody); //// testavimui ar veikia
//
// manoBody.appendChild(manoElementas);

// 1. sukurti "header"  DOM objekta/NODE'a
// test
// console.log(  manoHeader );

var manoHeaderis = document.createElement("header");
//console.log(  manoHeaderis  ); testavimui


// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)

var manoTekstas = document.createTextNode("Antraštė");
manoHeaderis.appendChild(manoTekstas);
//console.log(manoHeaderis); testavimui



// 3. i susikuta 'header' objekta idedame 'tekstas' objekta
// test
// console.log(  manoHeader );

manoBody.appendChild(manoHeaderis);

// 4. headeri idesime po H1
//        tetis                kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );

var manoAside = document.querySelector('aside');
document.body.insertBefore(manoHeaderis, manoAside);

























//
