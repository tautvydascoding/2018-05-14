// console.log("Labas ");
//
// // 2.3 UZDUOTIS
// // paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// // skirtingius paveikslelius
//
// var nuotrauka = '<img src="img/1.png"  class="img-fluid"  width="20%"  alt="baltas minkstas fotelis">';
// console.log(nuotrauka);
//
// // var q = document.querySelect("body");
// for (var i = 0; i < 12; i++) {
//     document.querySelector("body").innerHTML += nuotrauka;
// }

// =========================================

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

// piestiEilute(40);
// console.log("vardas |  pavarde | amzius");
// piestiEilute(40);
// piestistulpeli(10);

// var bruksnelis = "-";
// var tarpas = "<br>"
//
// for (var i = 0; i < 40; i++) {
//     document.write(bruksnelis);
// }
// document.write(tarpas + "vardas |  pavarde | amzius" + tarpas);
//
// for (var i = 0; i < 40; i++) {
//     document.write(bruksnelis);
// }



function piestiEilute (ilgis) {

    var eilute = "-";
    
    for (var i = 0; i < ilgis; i++) {
        eilute = eilute + "-";
    }
    console.log(eilute);
}

piestiEilute (30);
console.log("vardas |  pavarde | amzius");
piestiEilute (50);


// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |
