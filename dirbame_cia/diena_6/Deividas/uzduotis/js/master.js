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
//document.write(" <b class='bg-info'> Mano tekstas </b> ");

// window.alert("labas");


 //x = 10 + 15;
// alert(x);

// alert("Viso");


// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);


//var ivestasTekstas = prompt("Ivestkite savo varda");
//console.log(ivestasTekstas);
//document.write("Jusu vardas:" +  ivestasTekstas);


//var x = " Tomas";
//var y = " Jurgauskas";
//var  z = x + y;
//console.log( "Duomenys:" + z ); // Duomenys: Tomas Jurgauskas

// document.querySelector('h1').innerHTML = " <b>Antraste</b>";
//var x = document.querySelector('h1'); // querySelector ieskome h1 elemento
//console.log(  "h1:", x); //<h1> tekstas </h1>

//document.querySelector('h1').innerHTML = " Antraste3";


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



function printKaina( x, y )  {
  console.log(x, y);
}

printKaina ("Kaina:", 999.00);
printKaina ("Kaina:", 13.49);
printKaina ("Kaina:", 100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
  var x1 = 5;
  var x2 = 10;
  var x3 = 8;
  var x4 = 6;
  var x5 = 8;
  var vidurkis = ( x2 + x3 + x4 + x5 + x1 ) / 5;
  console.log("vidurkis1:" + vidurkis );
}
pazymiuVidurkis();

console.log("PAZYMIU VIDURKIS TEST");
// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
var x1 = 5;
var x2 = 10;
var x3 = 8;
var x4 = 6;
var x5 = 8;

function pazymiuVidurkis1(x1, x2, x3, x4, x5){
  console.log( "pazymiu vidurkis: " + ( x2 + x3 + x4 + x5 + x1 ) / 5  );
}
pazymiuVidurkis();

//function pazymiuVidurkis1 (x1, x2, x3, x4, x5, vardas) {
  //var vidurkis = ( x2 + x3 + x4 + x5 + x1 ) / 5;
  //document.querySelector("h1").innerHTML += "Vidurkis: " + vidurkis;
  //arba
  //console.log( vardas + " vidurkis: " + vidurkis );
//
//pazymiuVidurkis1 ( 1, 9, 9, 8, 9, "Petka"); //Petka
//pazymiuVidurkis1 ( 1, 5, 5, 8, 9,"Marius"); // Marius
//pazymiuVidurkis1 ( 1, 9, 9, 8, 9,"Zose"); // Zose





//=====================RETURN==================


// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

 function getVardas() {
   return "Tadas";
 }
var vardas = getVardas(); //Tadas
console.log( vardas );
 //arba
console.log( getVardas()  );

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
  var x = "Antanas ";
  var y = "Tomauskas ";
  return x + y;
}

getVardasPavarde();


// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

//elemento duomenys
//A)
//B)
    //elemento aukstis  iskaiciavus remeli

var aukstis = document.querySelector("body h1").offsetHeight;
console.log(  "h1 auktis yra: " + aukstis );
document.querySelector("body h1").style.height = '200px';
document.querySelector("body h1").style.color = 'pink';
document.querySelector("body h1").style.backgroundColor = '#a3a3a3';
document.querySelector("body h1").style.fontSize = '150px';



// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
  var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
  return vidurkis;
}
var petroVidurkis = getPazymiuVidurkis2(1, 1, 1, 10, 10);
console.log( "Petriuko pazymiu vidurkis: " + petroVidurkis);


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
