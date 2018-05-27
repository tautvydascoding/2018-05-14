console.log("Labas ");

// document.querySelector('h1').innerHTML += "Idedu si teksta";

//naujo elemento kurimas (js)
var manoElementas = document.createTextNode("Sita teksta sukuriau su js");
var manoBody = document.querySelector('body');

manoBody.appendChild( manoElementas); // appendChild mano ideti ti su nodas/objektai

//elemento kurimas h1, p, footer
 var manoFooter = document.createElement('footer');
console.log(manoFooter); //test

// 1. sukurti "header"  DOM objekta/NODE'a
// test
// console.log(  manoHeader );
var manoHeader = document.createElement('header');
console.log( manoHeader);
// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)



// 3. i susikuta 'header' objekta idedame 'tekstas' objekta
// test
// console.log(  manoHeader );
var tekstas = document.createTextNode("Man viskas lengva, juk cia niekai");
manoHeader.appendChild(tekstas);
console.log( manoHeader);

manoBody.appendChild( manoHeader);
// 4. headeri idesime virs <aside>
//        tetis                kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );
var manoH1 = document.createElement('h1');
manoBody.appendChild(manoH1);
var manoAside = document.querySelector('aside'); //elementa reikia susirasti su querySelector ir po to naudoti
document.body.insertBefore( manoHeader, manoAside);
