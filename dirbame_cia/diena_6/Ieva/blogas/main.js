console.log("Labas");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

//document.write(" <b class='bg-info'> Mano tekstas </b> ");//
//document.write(" <b class='bg-primary'> Mano tekstas 2 </b> ");

// window.alert("labas"); daugiau naudojami testavimui
// alert("Viso"); dažnai naudojama testavimui;
//alert("Viso");
//x = 10 + 15;
//alert(x );//


// var ivestasTekstas = prompt("Ivestkite savo varda");

//var ivestasTekstas = prompt ("Iveskite savo varda");
//console.log(ivestasTekstas);
//document.write("Jusu vardas:" + ivestasTekstas);

//var x = "Tomas";
//var y = "Jurgauskas";
//var z = x + y;

//console.log( "Duomenys" + z); // duomenys Tomas Jurgauskas

//console.log( "Duomenys" + y); // duomenys Jurgauskas

//console.log ( "Duomenys" + x +y); //duomenys Tomas Jurgauskas

//document.write("Duomenys" + z);//


// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

var x = document.querySelector("h1"); /// ieskome H1 elemento
console.log("h1: ", x);

//innerHTML - kintamasis, kuris saugo elemento viduje esanti teksta//

document.querySelector('h1').innerHTML = "<b> Antraste </b>" // pakeitimui h1 i"antraste"


//----Elemento duomenys--------
// auksto paemimas:



//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);



function printKaina(x) {
  console.log ("Kaina:", x, "Eur");

}

printKaina (999.00);
printKaina (13.49);
printKaina (100.05);

function printKaina (kaina) {
  document.write(" <div> Prekes kaina:" + kaina + "Eur" +"</div>"); // kad tarp eiluciu tarpai atsirastu
}
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);


// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


function pazymiuVidurkis1(x1, x2, x3, x4, x5, vardas){
  var vidurkis1 =  (x1 + x2 + x3 + x4 + x5) / 5;
  console.log("vidurkis", vidurkis1, "Vardas:", vardas);
  document.querySelector('h1').innerHTML += "Vidurkis1:" + vidurkis1 + vardas;
}

pazymiuVidurkis1(5, 10, 8, 5, 8, "Rasa");
pazymiuVidurkis1(5, 7, 8, 5, 8, "Juozas");
pazymiuVidurkis1(5, 10, 6, 5, 8, "Vytas");





// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

console.log("Uzduotis 1.1");


function pazymiuVidurkis(){
  var x1 = 5;
  var x2 = 10;
  var x3 = 8;
  var x4 = 6;
  var x5 = 8;
  console.log ("Vidurkis:", (x1 + x2 + x3 + x4 + x5) / 5);
}

pazymiuVidurkis();




//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja


function getVardas () {
      return "Tomas";
    }
    var vardas = getVardas(); /////Tomas

    console.log(vardas);

    ////arba


    console.log( getVardas() );




// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja


  function getVardasPavarde () {
    return "Antanas Tomauskas";
  }
        var vardas1 = getVardasPavarde(); /////Antanas Tomauskas

        console.log(vardas1);

        ////arba

        console.log( getVardasPavarde() );


// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)


/// 4.1 uzduotis
//B offsetHeight - atsakingas uz elemento auksti su remeliu

 var aukstis = document.querySelector('body h1').offsetHeight;
 console.log("h1 aukstis yra: " + aukstis);


// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:



// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti

document.querySelector("body h1").style.height = '200px';
document.querySelector("body h1").style.backgroundColor = 'pink';
document.querySelector("body h1").style.fontSize = '60px';

// arba
var elmH1 = document.querySelector("body h1");

elmH1.style.height = "50px";


// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia






// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

        function getPazymiuVidurkis2 (x1, x2, x3, x4, x5){
          var vidurkis2 = (x1 + x2 + x3 + x4 + x5) / 5;
          return vidurkis2;

        }

        var manoVidurkis = getPazymiuVidurkis2(5, 6, 7, 8, 9);
        console.log("Mano pazymiu vidurkis:" + manoVidurkis);


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
