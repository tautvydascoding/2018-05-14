// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined


// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
var Mokinys = {
  vardas: "Jurgis",
  pavarde: "Jurgauskas",
  kelintokas: 7,
  matPazymiai: [6, 5, 9, 10, 8],
  begu: function() {
    console.log("begu, begu...");
  }
};

Mokinys.begu();

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log("Mokinys", Mokinys);
console.log("vardas:" , Mokinys.vardas);
console.log("pavarde:" , Mokinys.pavarde);
console.log("kelintokas:" , Mokinys.kelintokas);


for (var i = 0; i < Mokinys.matPazymiai.length; i++) {
  console.log("pazymiai:", Mokinys.matPazymiai);
}
// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
// Mokinys.kelintokas = 8;
Mokinys.kelintokas++;
console.log(Mokinys.kelintokas);
// pakeisti: visus 6 pazymius


// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
Mokinys.begu = function begu() { console.log("bugu begu");

};
Mokinys.begu();
// prideti nauja kintamaji: miestas = 'kaunas'


// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

//============3=pvz: construktorius =====
// function Car(nr, c, ms) {
//     this.numberOfDoors = nr;
//     this.color = c;
//     this.maxSpeed = ms;
// }
//
// // objekto kurimas
// var AudiTT = new Car(2, "red", 280);
