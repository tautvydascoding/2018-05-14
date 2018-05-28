console.log("labas");

document.querySelector('h1').innerHTML += "idedu si teksta";


//naujo elemento kurimas (js)

var manoElementas = document.createTextNode("Sita teksta sukuriau pats");

var manoBody = document.querySelector('body');

console.log("mano elementas: " , manoElementas); // test ar yra duomenys
//console.log("mano manoBody: " , manoBody);

manoBody.appendChild( manoElementas);

// egzistuojancio h1 elemento perkelimas i body apacia
var manH1 =document.querySelector('h1');
manoBody.appendChild( manH1);

//================================
var manoFooter = document.createElement('footer'); // objhektas/Nodee's
console.log( manoFooter ); //test

// 1. sukurti "header"  DOM objekta/NODE'a
var manoHeader = document.createElement('header');
//console.log( manoHeader );
// test
// console.log(  manoHeader );

// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)

var tekstas = document.createTextNode("Tekstas tekstas");

// 3. i susikuta 'header' objekta idedame 'tekstas' objekta
manoHeader.appendChild( tekstas );
// test
// console.log(  manoHeader );
console.log( manoHeader );

manoBody.appendChild (manoHeader);

document.manoBody.insertBefore( manoHeader, manH1);

// 4. headeri idesime po H1
//        tetis                kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );





























//
