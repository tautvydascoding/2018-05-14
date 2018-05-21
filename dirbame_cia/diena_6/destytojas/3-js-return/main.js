console.log("Labas ");


//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
    return "Tadas";
}
var vardas = getVardas(); // Tadas
console.log(  vardas );
// arba
console.log(   getVardas()    );

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    var x = "Marta";
    var y = "Martinaityte";
    return x + y;             // arba "Marta Martinaityte"
    return   "Marta Martinaityte";
    return   "Marta" + " Martinaityte";
    var z = x + "<br>";       // niekada neivyks
}
var duomenys = getVardasPavarde();
console.log( duomenys  ); //arba  console.log(  getVardasPavarde() );

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"
// f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    var vidurkis = (x1, x2, x3, x4, x5) / 5;
    return vidurkis;
}
var petroVidurkis = getPazymiuVidurkis2(1, 1, 1, 10, 10);
console.log(  "Petriuko pazymiu vidurkis: " + petroVidurkis);

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia


//----Elemento duomenys--------
// A)
//B)
// offsetHeight  - elemento aukstis iskaiciavus remeli
var aukstis = document.querySelector("body h1").offsetHeight;
console.log(  "h1 aukstis yra: " + aukstis );
 document.querySelector("body h1").style.height = '200px';
 document.querySelector("body h1").style.color = 'pink';
 document.querySelector("body h1").style.backgroundColor = '#a3a3a3';
 document.querySelector("body h1").style.fontSize = '150px';

 // arba
 var elementasH1 = document.querySelector("body h1");
 elementasH1.style.height = '200px';
 elementasH1.style.color = 'pink';
 elementasH1.style.backgroundColor = '#a3a3a3';
 elementasH1.style.fontSize = '150px';



// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:



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
