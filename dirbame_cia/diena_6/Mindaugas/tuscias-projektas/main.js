console.log("labas");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
document.write("<b class='bg-info'> Mano tekstas </b>");
document.write("<p>  Mano tekstas </p>");
// window.alert("labas");
// window.alert( "you won a new car" );
// alert("Viso");
// alert("iki");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// IDEA: ivesta teksta galima po to ivesti i konsole su log ar su document.write
// var ivestasTekstas = prompt("Ivestkite savo varda")
// console.log(ivestasTekstas);
// console.log(ivestasTekstas);
// document.write(ivestasTekstas);

var x = "tomas";
var y = "Jurgauskas";
var z = x + y;
console.log("dommenys" + z ); //Duomenys TomasJurgauskas
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// IDEA: querySelector suranda pirma kurodomaji kintamaji, o querySelectorall suranda visus
document.querySelector('h1').innerHTML = "<b>lanas</b>";//pakeicia pasirinkta elemta i innerHTML nurodyta
var x = document.querySelector('h1'); //  querySelector - ieskome h1 elemento
console.log( "h1:" + x );
//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.

// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
function printKaina(x) {
  console.log( "Kaina", x);
  // IDEA: galima kurti atskiruose elementuose kuriant div ar p
  document.write("<div>kaina:", x, "&nbsp;</div>");// spaudina kana: sk ir deda gale tarpa
}
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);
// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
  var a = 5;
  var b = 10;
  var c = 8;
  var d = 6;
  var e = 8;
  var vidurkis = (a + b + c + d +e)/5;
  console.log("vidurkis:", vidurkis);
  document.write("vidurkis:", vidurkis);
}
pazymiuVidurkis();
// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis1(x1, x2, x3, x4, x5, vardas) {
  var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
  document.querySelector('h1').innerHTML += vardas + vidurkis;
  console.log(vardas, vidurkis);
}
pazymiuVidurkis1(1, 1, 9, 8, 5, "Jonukas"); // jonas

pazymiuVidurkis1(5, 4, 8, 4, 9, "Petriukas");// petriukas

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
function getVardas() {
  return "tomas";

}
var Vardas = getVardas(); // vardas
console.log( Vardas);
//arba
console.log( getVardas());
// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja
function getVardasPavarde() {
  return "Tomas Antanas";
}
var Vardas = getVardasPavarde();
console.log( Vardas );
console.log( getVardasPavarde());
// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
var aukst = document.querySelector("body h2").offsetHeight; //elemento aukstis su remeliu
console.log("h2 auksti yra:" + aukst);

var aukst = document.querySelector("body h2").style.height = '100px';
var aukst = document.querySelector("body h2").style.color = 'grey';
var aukst = document.querySelector("body h2").style.backgroundColor = 'pink';
var aukst = document.querySelector("body h2").style.fontSize = '50px';
//arba
var elemH2 = document.querySelector("body h2"); //kad surastu ir galetu naudoti
elemH2.style.color = 'blue';

function getH2ElementoAukstis() {
  document.getElementById('h2').clientHeight;
  return
}

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
  var vid = (x1 + x2 + x3 + x4 + x5) / 5;
  return vid;
}
console.log( getPazymiuVidurkis2(1, 2, 4, 7, 9));
// IDEA: arba jei norime naudoti kur nors kitur
var  vidurkis = getPazymiuVidurkis2(1, 2, 4, 7, 9);
console.log( vidurkis);

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######
var a = ""
for (var i = 0; i < 6; i++) {
  var a = "#" + a;
  console.log( a );
}

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
