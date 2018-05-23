console.log("Labas ");



// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// document.write(" Mano tekstas 2 ");
//
// // window.alert("labas");
// // alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.write("Jusu vardas: " + ivestasTekstas);
// var x = "Justas";
// var y = "Prekevicius";
// var z = x + y;
// console.log("Duomenys " + z); //Duomenys Justas Prekevicius

// var x = document.querySelector('h1'); //querySelector - ieskome <h1> Elemento
// console.log("h1" + x); // <h1> Antraste </h1>
//
// // innerHTML kintamasis, kuris saugo elemento viduje esanti teksta
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";


//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;
// clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:


//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);



// function printKaina(x) {
//     document.write(" <div> prekes kaina: " + x + "</div>");
//     // arba
//     console.log(x);
// }
// // iskvietimas
// printKaina(999.00);
// printKaina(13.49);
// printKaina(100.05);



// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
//
// function pazymiuVidurkis() {
//     var x1 = 5;
//     var x2 = 10;
//     var x3 = 8;
//     var x4 = 6;
//     var x5 = 8;
//     var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
//     console.log("vidurkis1: " + vidurkis);
// }
// pazymiuVidurkis();





// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


// function pazymiuVidurkis1(a, b, c, d, e, vardas) {
//     var vidurkis = ((a + b + c + d + e) / 5);
//     document.querySelector("h1").innerHTML += vardas +  vidurkis;
//     // arba
//     console.log(vardas + "vidurkis: " + vidurkis );
// }
// pazymiuVidurkis1(5, 10 , 8 , 6 , 8, "Petriukas");
// pazymiuVidurkis1(6, 8 , 8 , 2 , 7, "Maryte");



//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja


//
// function getVardas() {
//     return "Tomas";
// }
// var vardas = getVardas();  //Tomas
// console.log(vardas);
// // arba
// console.log(getVardas());
//




// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja
//
// function getVardasPavarde() {
//     var pavarde = "Tomauskas";
//     var vardas1 = "Antanas";
//     return vardas1 + pavarde;
// }
// getVardasPavarde();
// document.write(getVardasPavarde());
//

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia







// // 4.1 UZDUOTIS
// // parasyti f-ja, kuri turi "return" zodeli.
// // "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//
// function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
//     var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
//     return vidurkis;
// }
//
// var petroVidurkis = "Petro pazymiu vidurkis: " + getPazymiuVidurkis2(2, 5, 6, 7, 2);
// document.write(petroVidurkis);



// =================FOR intro  ======================

var aukstis = document.querySelector("h1").offsetHeight; //elemento aukstis su remeliu
document.write("h1 aukstis yra: " + aukstis);
var aukstis = document.querySelector("h1").style.height = "200px";
var aukstis = document.querySelector("h1").style.backgroundColor = "pink";
var aukstis = document.querySelector("h1").style.fontSize = "150px";

// arba
var elementasH1 = document.querySelector("h1");
elementasH1.style.height = "250px";
elementasH1.style.backgroundColor = "green";


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
