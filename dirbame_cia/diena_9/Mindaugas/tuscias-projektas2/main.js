
// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========

 //patartinas masyvo kopijavimas
 var masyvas1 = ["Tomas", "Jurgis", "Antanas"];
 var masyvas2 = masyvas1;

 console.log("pries redaguojant m1:" , masyvas1);
 console.log("pries redaguojant m2:", masyvas2);
//ideadam i masyvas1
masyvas1.push("Gaidys");
console.log("Po -masyvas1- redagavimo m1:", masyvas1);
console.log("Po -masyvas1- redagavimo m2:", masyvas2);
//keiciant viena, keiciasi ir kitas, nes yra tas pats masyvas
// kopijuoti masyvu negalima su lygybe =
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

    } else {

    }


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
var arRadau = false;
var ieskoma vardas = "Rico";
for (var i = 0; i < names.length; i++) { //galima rinktis name.length, jei kistu masyvo ilgis
  if ( names[i] == ieskomasvardas) {
    arRadau = true; //radau
    console.log("radau Rico. Jo numeris" + i);
    break;
  }
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

for (var i = 0; i < 50; i++) {
  if (name[i] == "Rico") {
  console.log("radau rico. Jo nr:" + i);
  break;
}
}
// 4) rasti visu zmoniu vardu "Rico" pavardes
for (var i = 0; i < 50; i++) {
  // tiriname ar vardas yra Rico is masyvo virsuje
  //nelysti i stalcius, kuriuose nera
  if (names[i] == "Rico") {
    console.log("radau Rico. Jo numeris:" + i);
  }
}


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
