console.log("Labas ");


// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

var manoHeader = document.createElement('header');   // <header> </header>

//!!! createElement - NEIDEDA elenemto i DOM'a
//    (isidet reik paciam su appendChild)
// console.log(  manoHeader  );  // test

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

var manoTekstas = document.createTextNode("ANtraste1");
// console.log(  manoTekstas  ); // test

// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// console.log(  manoHeader );  // test

// manoHeader.appendChild(  '<footer> aaa </footer>'  ); // !!! ERRROR
// teksto idejimas i <header> vidu
manoHeader.appendChild(   manoTekstas  );
// console.log(   manoHeader  ); // test

// 3.1. headerio elementa ideti i <body> elementa

// A) surasti body
document.querySelector('body').appendChild(    manoHeader   );
// document.body
// ARBA
var manoBody = document.querySelector('body');
// querySelector - elementu iesko tik DOM'o viduje (ekrane)
manoBody.appendChild(    manoHeader   );

// 3.2. headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );

var manoAside = document.querySelector('aside');
document.body.insertBefore(  manoHeader, manoAside );









//
