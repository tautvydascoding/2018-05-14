console.log("Laba DIENA ");

//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)


//for (var i = 0; i<50; i++) {
//console.log("Azuolas");
//}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTM

//for (var i = 0; i < 1; i+=1) {
  //document.write("<h3>Azuolas<h3>");
//}

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

//for (var i = 0; i < 50; i++) {
//document.querySelector("article").innerHTML+="<h2>Azuolas</h2>";
//}

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)



//function printX( duomenys ) {
//document.querySelector("article").innerHTML+=duomenys;
//}



// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

//for ( var i = 0; i < 20; i++ ) {
  //printX("tekstas su for <br>") ;

//}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

//var nuotrauka = "<img src='images/lake.jpg' class='img-fluid' alt='photo lake' width='20%' />"
//console.log("lake photo");

//for (i = 0; i < 12; i++){
//printX(nuotrauka);
  //}



// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |



function piestiEilute(ilgis) {
var eilute = "";

for (i = 0; i < ilgis; i++){
    eilute += "-";
    }

    console.log(eilute);
}

piestiEilute(40);
piestiEilute(10);


//piestiEilute(40);
//console.log("vardas   |   pavarde   | amzius");
//piestiEilute(40);
//piestiStulpeli(10);




// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
