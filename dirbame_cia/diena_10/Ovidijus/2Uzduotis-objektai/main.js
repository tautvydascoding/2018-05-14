console.log("Labas ");


var mokinys = {
  vardas: "Ovidijus",
  pavarde: "Kutkaitis",
  kelintokas: 1,
  pazymiai: [6, 5, 9, 10, 8],
  miestas:"Kaunas",
  begu: function() {
    console.log("bugu begu");
  }

};
console.log("vardas: " + mokinys.vardas);
console.log("pavarde: " + mokinys.pavarde);
console.log("kelintokas: " + mokinys.kelintokas);
console.log("pazymiai: " + mokinys.pazymiai);

// mokinys.kelintokas = 2;
mokinys.kelintokas++;
// mokinys.kelintokas = mokinys.kelintokas + 1;
console.log("kelintokas dabar: " + mokinys.kelintokas);

mokinys.pazymiai = [10, 2, 5, 3, 10];
console.log("pazymiai dabar: " + mokinys.pazymiai);

//  taip kurti nepatarina
// mokinys.begu = function() {
//   console.log("bugu begu");
// };
// mokinys.begu();
//
// mokinys.miestas = "Kaunas";
// console.log("Miestas: " + mokinys.miestas);

console.log( mokinys);

mokinys.begu();
