// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
//
// document.write(" Mano tekstas ");
//
// window.alert("labas");
//
// alert("Viso");
// x = 10 + 15;
// alert(x);

// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.write("Jusu vardas: " + ivestasTekstas);
// var x = "Tomas";
// var y = "Jurgauskas";
// var z = x +y;
// console.log("duomenys " + z);

// var x = document.querySelector("h1"); //querySelector - ieskome <h1> elemento
// console.log("h1: " , x ); // <h1>Antraste</h1> visa suranda
//
// //innerHTML - kintamasis, kuris saugo elemento viduje esanti teksta
//
// document.querySelector('h1').innerHTML = "Antraste 2";
// //document.querySelector('h1')- suranda objekta   .innerHTML = "Antraste 2"- nurodo koki teksta rasyti

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina(x){
  document.write(x);
}
printKaina(" <div> Kaina: " + 999.00);
printKaina("<div> Kaina: " + 13.49);
printKaina("<div> Kaina: " + 100.05);

// destytojo pvz

// function printKaina ( kaina ){
//   document.write("Prekes kaina: " + kaina)
// }
// printKaina( 999.00 );
// printKaina( 13.49 );
// printKaina( 100.05 );

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis(){
  var sk1 = 5;
  var sk2 = 10;
  var sk3 = 8;
  var sk4 = 6;
  var sk5 = 8;
  var vidurkis = (sk1 + sk2 + sk3 + sk4 + sk5) / 5;
  document.write ("<div> Vidurkis: " + vidurkis);
}
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5){
  var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
  document.querySelector("h1").innerHTML += "Vidurkis: " + vidurkis;
}
pazymiuVidurkis1(5, 10, 8, 6, 8);


//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas(){
  return "Tadas";
}
var vardas = getVardas(); // Tadas
console.log( vardas );
/// arba
console.log( getVardas() );

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde(){
  var vardas = "Antanas";
  var pavarde = "Tomauskas";
  return vardas + pavarde; // Arba return "Antanas Tomauskas"
}
console.log(getVardasPavarde());
//Arba
var duomenys = getVardasPavarde();
console.log( duomenys );

// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
  var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
  return vidurkis;
}
var petroVidurkis = getPazymiuVidurkis2(5, 10, 8, 6, 8);
console.log("Petro pazymiu vidurkis: " + petroVidurkis);

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

var aukstis = document.querySelector("body h1").offsetHeight; // arba tiesiog be tecio ("h1"), offsetHeight - elemento aukstis iskaiciavus remeli
console.log( "h1 aukstis yra: " + aukstis );
document.querySelector("body h1").style.height = "200px";
document.querySelector("body h1").style.color = "pink";
document.querySelector("body h1").style.backgroundColor = "#a3a3a3";
document.querySelector("body h1").style.fontSize = "100px";

// arba

var elementasH1 = document.querySelector("body h1");
elementasH1.style.height = "200px";
elementasH1.style.color = "pink";
elementasH1.style.backgroundColor = "#a3a3a3";
elementasH1.style.fontSize = "100px";


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
