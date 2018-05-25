// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

// js objektai - uzrasomi JSON formatu (kiti formatai  xml, ...)
var mokinys = {
    vardas: "Tadas",
    pavarde: 'Tudikaitis',
    klase: 7,
    pazymiai: [6, 5, 9 , 10, 8],
    begu: function() {
        console.log("begu begu...");
    }
};
console.log(  mokinys );



// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log(   "vardas: ",  mokinys.vardas );
console.log(   "pavarde: ",  mokinys.pavarde );
console.log(   "klase: ",  mokinys.klase );

// for (var i = 0; i < mokinys.pazymiai.length; i++) {
for (var i = 0; i < 5; i++) {
    console.log( "pazymiai: ", mokinys.pazymiai[i] );
}

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia

mokinys.klase++;
// mokinys.klase = mokinys.klase + 1;
// mokinys.klase = 8;
console.log(  "klase: ", mokinys.klase   );

// pakeisti: visus 6 pazymius
console.log(  "pazymiai pries pakeiciant: ", mokinys.pazymiai[0]   );
mokinys.pazymiai[0] = 7;
console.log(  "pazymiai po: ", mokinys.pazymiai[0]   );

// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
mokinys.begu();
// prideti nauja kintamaji: miestas = 'kaunas'

//!!! nepatartina
mokinys.miestas = "Kaunas";
console.log( mokinys );

mokinys.einu = function() {
        console.log(" einu letai ");
      };
// f-jos iskiveitmas
mokinys.einu();

// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika


mokinys2 = mokinys;
mokinys2.vardas = "Saule";
console.log( mokinys);
console.log( mokinys2);

// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

//============3=pvz: construktorius =====
function Car(nr, c, ms) {
    this.numberOfDoors = nr;
    this.color = c;
    this.maxSpeed = ms;
}

// objekto kurimas
// new - kuria nauja OBJEKTA
var AudiTT = new Car(2, "red", 280);
var Audi4 = new Car(4, "red", 280);
var Audi8 = new Car(5, "red", 280);
var Audi6 = new Car(4, "BLUE", 280);
