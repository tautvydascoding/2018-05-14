
//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina (kaina) {
  console.log(kaina);

}
printKaina (999.00);
printKaina (13.49);
printKaina (100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis0 (x1, x2, x3, x4, x5) {
  console.log( "vidurkis5" + (x1 + x2 + x3 + x4 + x5) / 5);
}
pazymiuVidurkis0  (5, 10, 8, 6, 8);


// arba 2 budas kaip spresti
function pazymiuVidurkis2() {
  var x1 = 5;
  var x2 = 10;
  var x3 = 8;
  var x4 = 6;
  var x5 = 8;
  var vidurkis = (x1 + x2 + x3 + x4 + x5)/5;
  console.log("vidurkis1" + vidurkis);
}

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1 (x1, x2, x3, x4, x5, vardas) {
var vidurkis1 = (x1 + x2 + x3 + x4 + x5)/5;
document.querySelector('h1').innerHTML += vidurkis1 + vardas;
}

pazymiuVidurkis1 (1, 9, 9, 8, 9, "petras");
pazymiuVidurkis1 (8, 9, 9, 8, 10, "marius");
pazymiuVidurkis1 (3, 4, 5, 5, 7, "juozas");



//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
 function getVardas () {
   return "Tadas";
 }
var vardas = getVardas ();
console.log( getVardas ()  );







// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde () {
return "AntanasTomauskas";

}
var vardasPavarde = getVardasPavarde();
console.log( getVardasPavarde ()  );



// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia


// offsetHeight - elemento aukstis su remeliu iskaiciavus remeli.
var auks = document.querySelector("body h1").offsetHeight;
console.log( "h1 aukstis yra:"  + auks);
document.querySelector("body h1").style.height = '200px';
document.querySelector("body h1").style.backgroundColor = '#a3a3a3';
document.querySelector("body h1").style.color = 'red';

// arba

var elementasH1 = document.querySelector("body h1");








// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis2 (x1, x2, x3, x4, x5) {
  var  vidurkis = (x1, x2, x3, x4, x5)/5;
  return vidurkis;
}
var birutesvidurkis = getPazymiuVidurkis2(10, 6, 10, 9, 8);
console.log( "Birutes pazymiu vidurkis:" + birutesvidurkis);

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
