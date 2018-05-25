console.log("Labas ");
// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined


// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {
    vardas: "Tomas",
    pavarde: "Tomaitis",
    klase: 3,
    matematikosPazymiai: [6, 5, 9, 10, 8],
    begu: function(){console.log("Begu letai");
    },
    };


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

var x = mokinys.vardas;
console.log ("Vardas", x);
console.log("Vardas",  mokinys.vardas);
console.log("Pavarde",  mokinys.pavarde);
console.log("Klase",  mokinys.klase);

for (var i = 0; i < mokinys.matematikosPazymiai.length; i++){
    console.log("Matematikos pazymiai",  mokinys.matematikosPazymiai[i]);
}

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia

mokinys.klase++;   ///padidiname plius vienetu
console.log("Mokinio klase", mokinys.klase);

// pakeisti: visus 6 pazymius
mokinys.matematikosPazymiai=[5, 8, 9, 10, 10];
console.log("Mokinys", mokinys.matematikosPazymiai);


mokinys.matematikosPazymiai[0]=10;
console.log("Nauji pazymiai", mokinys.matematikosPazymiai);

// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'

mokinys.beguBegu= function (){
  console.log("begu greitai");
};

mokinys.beguBegu();

mokinys.begu();

// prideti nauja kintamaji: miestas = 'kaunas'

mokinys.miestas="Kaunas";
console.log("Mokinys", mokinys.miestas);

var x = mokinys.miestas;
console.log("Mokinio miestas", x);


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
