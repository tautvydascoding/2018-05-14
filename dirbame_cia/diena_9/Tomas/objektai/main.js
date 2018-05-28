console.log("Labas ");
var vardas = ""; // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined


// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos
//  pazymiai (6, 5, 9 , 10, 8)
//  js objektai - naudoja Json formatu
var mokinys = {
    vardas: "Tomas",
    pavarde: "Riabcikovas",
    klase: 10,
    pazymiai: [6, 5, 9, 10, 8],
    begu: function() {
        console.log("begu, begu vel");
    }
};

mokinys.begu();


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log("Vardas:", mokinys.vardas);
console.log("Pavarde:", mokinys.pavarde);
console.log("Klase:", mokinys.klase);
for (var i = 0; i < mokinys.pazymiai.length; i++) {
    console.log("pazymiai:", mokinys.pazymiai[i]);
}
// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'

mokinys.klase++;
// mokinys.klase= mokinys.klase + 1;
console.log("klase:", mokinys.klase);

mokinys.pazymiai[0] = 7;
console.log("pazymiai:", mokinys.pazymiai);
