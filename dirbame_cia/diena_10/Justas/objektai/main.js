// console.log("Labas ");
//
// // 1 UZDUOTIS:
// // sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
//
// var mokinys = {
//     vardas: "Petras",
//     pavarde: "Antanaitis",
//     kelintokas: 5,
//     matPazymiai: [6, 5, 9 , 10, 8],
//     begu: function () {
//         console.log("begu begu");
//     }
// };
//
//
//
// // 1.1 UZDUOTIS
// // atspauzdinti visus duomenis
//
// console.log("vardas: " , mokinys.vardas);
// console.log("pavarde: " , mokinys.pavarde);
// console.log("kelintokas: " , mokinys.kelintokas);
// console.log("pazymiai: " , mokinys.matPazymiai);
// // arba taip teisingiau
// for (var i = 0; i < mokinys.matPazymiai.length; i++) {
//     console.log("pazymiai vel: " , mokinys.matPazymiai[i]);
// }
//
//
//
//
// // UZDUOTIS 1.2
// // PAKEISTI : klase i sekancia
// // pakeisti: visus 6 pazymius
// // prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// // prideti nauja kintamaji: miestas = 'kaunas'
//
//
// mokinys.kelintokas = 6,//cia ihardcodinimas nepatariama
// mokinys.kelintokas = mokinys.kelintokas + 1,//sitas ilgas bet neblogas
// mokinys.kelintokas++,//cia pats geriausias
// console.log("dabar mokinys: " , mokinys.kelintokas);
// //
// //
// // sitas variantas nelabai
// mokinys.matPazymiai = [2, 6, 4, 8, 9],
// console.log("nauji pazymiai: " , mokinys.matPazymiai);
// //
// mokinys.matPazymiai[0] = 2;
// mokinys.matPazymiai[1] = 6;
// mokinys.matPazymiai[2] = 4;
// mokinys.matPazymiai[3] = 8;
// mokinys.matPazymiai[4] = 9;
// console.log("pazymiai dabar: " , mokinys.matPazymiai[0]);//ir taip toliau
//
//
// mokinys.begu();
//
//
//
// mokinys.eina = function () {
//         console.log("letai einu");
//     };
// mokinys.eina();//funkcijos iskvietimas

// // 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika





// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

//============3=pvz: construktorius =====
function Car(nr, c, ms) {
    this.numberOfDoors = nr;
    this.color = c;
    this.maxSpeed = ms;
}

// objekto kurimas
var AudiTT = new Car(2, "red", 280);
var Audi6 = new Car(5, "blue", 320);
console.log(AudiTT);
console.log(Audi6);
