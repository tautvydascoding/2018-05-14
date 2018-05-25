console.log("Labas ");
// UZDUOTIS

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

//2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
function getStalciausNumeris(xxx) {
  var arRadau = false;

  for (var i = 0; i < names.length; i++) {
    if (names[i] == xxx) {
      arRadau = true;
      return i;
    }
  }
  if (arRadau ==false) {
    return -1;
    return null;
  }
}
getStalciausNumeris('Treva'); // arba var nr = getStalciausNumeris(xxx)
//arba
console.log(getStalciausNumeris('Treva'));

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

var zmogausNr = getStalciausNumeris("Freida");
 console.log("ieskoma parvarde:", lastNames[zmogausNr] );
//arba
var zmogausNr = names.indexOf("Piper");

var ieskomaPavarde = lastNames[ zmogausNr];
console.log("ieskoma Pavarde:" + ieskomaPavarde);

// 4) rasti visu zmoniu vardu "Rico" pavardes
var rastosPavardes = [];    // susikurti masyva virsuje 1.
for (var i = 0; i < names.length; i++) {
  if (names[i] == "Rico") {
    console.log("Rico pavarde:", lastNames[i]); // naudojame vel del testavimo
    rastosPavardes.push( lastNames[i]);
  }
}
console.log("Visos rastos pavardes:", rastosPavardes);
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
 var ieskomiZmones = [2, 16, 17, 18, 19, 25];
   var masyvas = [];
for (var i = 0; i < ieskomiZmones.length; i++) {
  //A atspausdinti visus numerius
  var x  = ieskomiZmones[i];

  console.log( "ieskomo zmogaus numeriai", x);
bla =  names[x];
bla2 = lastNames[x];
masyvas.push("Saunuolis");
masyvas.push(bla);
masyvas.push(bla2);
}
console.log(masyvas);
// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
