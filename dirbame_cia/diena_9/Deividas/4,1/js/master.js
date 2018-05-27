console.log("labas");



var masyvas1 = ["Tomas", "Jurgis","Antanas"];
var masyvas2 = masyvas1;

console.log("pries redaguojant m1: ", masyvas1);
console.log("pries redaguojant m2: ", masyvas2);
//idedam i masyva1
masyvas1[1] = "Joninessss";
console.log("PO -masyvas1- redagavimo m1: ", masyvas1);
console.log("PO -masyvas1- redagavimo m2: ", masyvas2);
//del to kad nukopijuota "prastai" abu sie masyvai yra  tas pats masyvas.
//keiciant vien-keisis ir kitas (nes tai tas pats masyvas )
//!!!!!!kopijuoti masyvu  negalima su  "=" var masyvas2 =masyvas1;
//!!iseitis:
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ! ne "splice() !!"





// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========


// UZDUOTIS

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 0 UZDUOTIS ----
    var atlyginimas = 500;
    var arPasikeite = false;
    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
    atlyginimas += 100;  // atlyginimas = atlyginimas + 100;
    if ( atlyginimas > 500) {
      console.log("atlyginimas pasikeite");
    } else {
      console.log("atlyginimas toks pats");
    }


    //suprogramuoti patikrinima (su if ) . kad isvest uzinute .










//
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
//break; nutraukia 1  cikla !!

// for (var i = 0; i < 50; i++) {
//   if (names[i]  ==  "Rico") {
//     console.log("Radau Rico. Jo numeris:  "+ i);
//
//   }
// }
// //or
// console.log("su break;");
//
// for (var i = 0; i < 50; i++) {
//   if (names[i]  ==  "Rico") {
//     console.log("Radau Rico. Jo numeris:  "+ i);
//     break;
//   }
// }


console.log("PAPILDOM UZDAVINI  DADEDAM KAD ISMESTU KAI NERANDA");
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
var arRadau = false;// dar neradau

    for (var i = 0; i < names.lenght; i++) {
        if (names[i]  ==  "Rico") {
          arRadau = true; // radau
          console.log("Radau Rico. Jo numeris:  "+ i);
          break;
          }
        }
        if (arRadau == false) {
          console.log("nepavyko rasti.. bandykite kita zodi");
        }
// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(xxx) {
  var arRadau = false; // dar neradau
  for (var i = 0; i < names.length; i++) {
    // tikriname ar vardas yra Rico
    if (names[i] == xxx) {
      arRadau = true; // radau
      return i; // nutraukia ne tik cikla, bet visa f-ja
    }
  }
  if (arRadau == false) {
    return -1;
    return null; // sitas niekad neivyks, nes sutikus " return -1;" f-ja nutrauks darba
  }
}
var nr = getStalciausNumeris('Rico----');
if (nr >= 0) {
  console.log("iskomo zmogaus numeris: " + nr);
} else {
  console.log("ieskomo zmogaus NERADOME");
}

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
