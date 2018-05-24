// function printDuomenys() {
//   var vardas = "Tomas";
//   console.log("vardas f-joje: " + vardas);
// }
// printDuomenys();

// console.log("vardas uz ribu: " + vardas); nes local (funkcijos viduje).

// var x = "x global";
//
// function testLocalVar() {
//   var y = "y local";
//   z = "z global"; // taip nedaryti
//   console.log("x", x);
//   console.log("y", y);
//   console.log("z", z);
// }
// // testLocalVar();
//
// console.log("x", x);
// console.log("z", z);
// console.log("y", y); // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"


// UZDUOTIS // UZDUOTIS
// A) sukurti kintamaji var katinas = "juodas"
// B) sukurti f-ja
// C) sukurti f-jos viduje kintamaji var katinas = "baltas"
// D) atspauzdinti abu f-jos viduje
// E) atspauzdinti  uz f-jos

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
