console.log("Labas ");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

 //document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
//alert("Viso");
 var ivestasTekstas = prompt("Ivestkite savo varda");
 console.log(ivestasTekstas);
 document.write("" + ivestasTekstas);
 var x ="Tomas";
 var y="Riabcikovas";
 var z=x+y;

 var x=document.querySelector('h1');
 console.log("h1:", x);
 console.log("Duomenys" +z);
document.querySelector('h1').innerHTML = " <b>Antraste3</b>";


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

function printKaina(Kaina) {document.write("<div> Prekes kaina:"+ Kaina+"</div>");
}

var x=100.05;
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);


// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)




//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
    return "Tadas";
}
var vardas = getVardas();
console.log(vardas);
// arba
console.log(getVardas());

getVardas();

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {


var x = "Antanas";
var y = "Tomauskas";

return x+y;
 var z = x + "<br>";
 }
console.log(getVardasPavarde());

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia


// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    var vidurkis = (x1+x2+x3+x4+x5)/5;
    return vidurkis;
}
var petroVidurkis =   getPazymiuVidurkis2(1, 1, 1, 10, 10);
console.log( "Petriuko pazymiu vidurkis:" + petroVidurkis);

var aukstis = document.querySelector("body h1").offsetHeight;
console.log( "h1 aukstis yra:"+aukstis);
document.querySelector("body h1").style.height= "200px";
document.querySelector("body h1").style.color="pink";
document.querySelector("body h1").style.backgroundColor= "#a3a3a3";
document.querySelector("body h1").style.fontSize= "150px";

// arba

var elementasH1 = document.querySelector("body h1");
elementasH1.style.height= "200px";
elementasH1.style.color="pink";
elementasH1.style.backgroundColor= "#a3a3a3";
elementasH1.style.fontSize= "150px";



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
