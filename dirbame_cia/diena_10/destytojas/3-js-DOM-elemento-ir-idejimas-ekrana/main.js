console.log("Labas ");


// document.querySelector('h1').innerHTML  +=  "Idedu si teksta";

// naujo elemento kurimas (js)
var manoElementas = document.createTextNode("Sita teksta sukuriau pats");
var manoBody = document.querySelector('body');

// console.log("mano elementas:", manoElementas); // test
// console.log("mano body:", manoBody);    // test

manoBody.appendChild(   manoElementas );   // veikia tik su NODE/objektais  // appendChild - i 'manoBody' idedame 'manoElementas' (kaip vaika)
// manoBody.appendChild(   "mano tekstas" );  // !!!! ERROR

//===============================
// egzistuojancio 'h1' elemnto perkelimas i 'body' apacia
var manH1 = document.querySelector('h1');
manoBody.appendChild(  manH1 );
//===============================

//==============footer elemento kurimas=================
var manoFooter = document.createElement('footer');   // objektas/Node'as
console.log(  manoFooter   );  //test
//===============================

//
