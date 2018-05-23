// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

var nuotrauka = "<img src='nuotraukos/atelerix-albiventris-0-0-0-0-1519364306.jpg' width='20%' classalt='eziukas'>";
console.log(nuotrauka);

for (var i = 0; i <12; i++) {
document.querySelector('body').innerHTML += nuotrauka;
}



// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
// piestiEilute (40);
// console.log("vardas |  pavarde | amzius");
// piestiEilute (40);
// piestiStulpeli (10);

function  piestiEilute(ilgis) {
var eilute = "";
for (var i = 0; i < ilgis; i++) {
  eilute = eilute + "-";
  // arba eilute += "-";
}
console.log(eilute);
}

piestiEilute(40);
piestiEilute(40);
piestiEilute(40);



// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
