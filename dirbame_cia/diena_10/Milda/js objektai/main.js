// / PRISIMINTI TEORIJA
// var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
// var zmogus; // undefined


// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
var mokinys = {
  vardas: "Rimas",
  pavarde: "Rimkevicius",
  klase: 5,
  pazymiai:[6, 5, 9, 10, 8],
  begu: function (){
  console.log("begu begu");
  }


};
console.log( mokinys );

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log( "vardas:", mokinys.vardas);
console.log("pavarde:", mokinys.pavarde);
console.log("klase:", mokinys.klase);

for (var i = 0; i < mokinys.pazymiai.length; i++) {
  console.log("pazymiai:", mokinys.pazymiai);
}



// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia

mokinys.klase++;
// kiti budai pakeisti klase
// mokinys.klase = mokinys.klase + 1;
// mokinys.klase = 8;
console.log("klase:", mokinys.klase );


// pakeisti: visus 6 pazymius
console.log("pazymiai pries pakeiciant:", mokinys.pazymiai[0]);
mokinys.pazymiai[0] = 7;
console.log("pazymiai:", mokinys.pazymiai[0]);


// prideti nauja f-ja begu(), kuri isves i console 'begu begu'

mokinys.begu();

// prideti nauja kintamaji: miestas = 'kaunas'

// nepatartina taip daryti
mokinys.miestas = "Kaunas";
console.log(mokinys);
mokinys.eina = function () {
  console.log("einuletai");
};
// funkcijos issikvietimas
mokinys.einu();


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
