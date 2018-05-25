// console.log("Labas ");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

//1
// function getStalciasuNumeris(xxx) {
//   var arRadau = false;
//
//   for (var i = 0; i < names.length; i++) {
//
//     if (names[i] == xxx) {
//       arRadau = true; // radau
//       return i; //nutraukia ne tik cikla, bet ir funkcija
//     }
//   }
//   if (arRadau == false) {
//     return -1;
//     return null; // sitas neivyks, nes sutikus "return -1;" funkcija nutruks
//   }
// }
// var nr = getStalciasuNumeris("Rico");
// if (nr >= 0) {
//   console.log("Ieskomo zmogaus numeris: "+ nr);
// } else {
// console.log("Ieskomo zmogaus NERADOME");
// }

// var zmogausNR = getStalciasuNumeris("Freida");
// 2
// var zmogausNR = names.indexOf("Rico"); // grazina stalciaus numeri
//
// var ieskomaPavarde = lastNames[ zmogausNR ];
// console.log("Ieskoma zmogaus pavarde: " + ieskomaPavarde);

// 3
// var rastosPavardes = [];
// var ieskomasVardas = "";
//
// for (var i = 0; i < names.length; i++) {
//   if (names[i] == ieskomasVardas) {
//     console.log( "Ieskomo zmogaus pavarde: " + lastNames[i]); // testavimas
//     rastosPavardes.push( lastNames[i]);
//   }
// }
// console.log(" Rastos pavardes yra: " + rastosPavardes );

// 4

// var ieskomiNR = [2, 16, 17, 18, 19, 25];
//
// for (var i = 0; i < ieskomiNR.length; i++) {
//   //A atspauzdinti numerius
//   var x = ieskomiNR[i];
//   console.log(x);
//
//   console.log("vardas: " + names[x]);
//   console.log("pavarde: " + lastNames[x]);
// }
