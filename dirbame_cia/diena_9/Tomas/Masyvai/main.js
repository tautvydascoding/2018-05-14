console.log("Labas ");

// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys() {
    var vardas = "Tomas";
    console.log("vardas f-joje:" + vardas);
}
printDuomenys();

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""



// var x = "x global";
// function testLocalVar() {
//     var y = "y local";
//     z = "z global";        //IDEA: nedaryti taip
//     console.log("x", x);
//     console.log("y", y);
//     console.log("z", z);
// }
// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y); // IDEA: error nes lokalus ir su "var"



//  var katinas = "juodas";   //global
//
//  function test2() {
//      var katinas = "baltas";  // local
//     console.log("1 katinas:", katinas);
//     console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
// }
//  test2();
//
// console.log("3 katinas:", katinas);


// var katinas = "juodas";   //global
//
// function test2() {
//     var katinas = "baltas";  // local
//    console.log("1 katinas:", katinas);
//    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
// }
// test2();
//
// console.log("3 katinas:", katinas);

// var xx = 10; // global
//
// function isvesti(xx) { // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
//     xx = 20; // local
//     console.log("1. xx:", xx);
//     console.log("2. this.xx:", this.xx);
// }
//  console.log("3. xx:", xx);
//
// isvesti(xx);

//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:
 // "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

var x="BMW pinga, nes daugeja";
function printAntraste(x) {
    
    console.log(x);

    }
}
