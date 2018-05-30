// console.log("Labas ");
//
//
// // document.querySelector("h1").innerHTML += "idedu si teksta";
//
// //naujo elemento kurimas
// var manoElementas = document.createTextNode("sita teksta sukuriau pats");
// var manoBody = document.querySelector('body');
//
// console.log("mano elementas: " , manoElementas);//test
// // console.log("mano bodis: " , manoBody); //cia yra testavimas
//
//
// // document.querySelector('body').appendChild(manoElementas);
// //arba
// manoBody.appendChild(manoElementas);//ideda elementui kuri paleidai mano elementas kaip vaika
// //veikia tik su NODE/objektais
// // manoBody.appendChild("mano Tekstas");//error
//
//
// //=============================
// //egzistuojancio h1 elemento perkelimas i 'body' apacia
// var manH1 = document.querySelector('h1');
// manoBody.appendChild(manH1);
// //=============================
//
//
// var manoFooter = document.createElement('footer');//objektas/Node'as
// console.log(manoFooter);//test




// 1. sukurti "header"  DOM objekta/NODE'a
// test
// console.log(  manoHeader );

var manoHeader = document.createElement('header');  //sukurs <header></header>
//jis kolkas neegzistuoja niekur nes createElement neideda jo i html medi arba DOM
console.log(manoHeader); //test


// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)

var manoTekstas = document.createTextNode("Antraste"); //sukuriam kintamaji ir jam sukuriame tekstini elementa
console.log(manoTekstas); //test

// 3. i susikurta 'header' objekta idedame 'tekstas' objekta
// test
// console.log(  manoHeader );



//======================
// manoHeader.appendChild("manoTekstas"); //error
manoHeader.appendChild(manoTekstas);
console.log(manoHeader); //test

//=======================
document.querySelector('body').appendChild(manoHeader); //iesko tik DOM'e
// //arba
// document.body //veikia tik su body
//arba
var manoBody = document.querySelector('body');
manoBody.appendChild(manoHeader);
console.log(manoBody);


//========================
var manoAside = document.querySelector('aside');
document.body.insertBefore(manoHeader, manoAside);




// 4. headeri idesime po H1
//        tetis                kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );
