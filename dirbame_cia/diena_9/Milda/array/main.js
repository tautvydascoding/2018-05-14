// // // / =================taisyklingas Array copy  =================
// // // NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// // var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// // var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// // var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// // // ================= ========= ======== ========
//
//
//
//
// // Patartinas masyvo kopijavimas
// var masyvas1 = ["Tomas", "Jurgis", "Antanas"];
// var masyvas2 = masyvas1;
//
//
// console.log("pries redaguojant m1:", masyvas 1);
// console.log(""pries redaguojant m2:", masyvas 2");
// // del to, kad buvo nukopijuota "prastai buvo abu sie masyvai yra tas pats masyvas."
// // keiciant viena keisis ir kitas (nes tai tas pats masyvas), kopijuoti masyvu negalima su lygybe.
// // iseitis:
// // var arr2a = arr1.slice(0, 5);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// // // var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
//
// // IDEDAM I MASYVAS 1
//
//
// console.log("Po -masyvas1- redagavimo m1:", masyvas1);
// console.log("Po -masyvas1- redagavimo m2:", masyvas2);
//
// // ne splice

// // 0 UZDUOTIS ----
    var atlyginimas = 700;
    var arPasikeite = false;
    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
    atlyginimas += 100;  // atlyginimas = atlyginimas + 100;
    if ( atlyginimas > 500) {
console.log("atlyginimas pasikeite");
    } else {
  console.log("atlyginimas toks pats");
}


//
// // suprogramuoti patikrinima (su if), kad isvestu zinute
 if (atlyginimas > 500) {
  arPasikeite = true;
}
if (arPasikeite) {
  console.log("atlyginimas pasikeite");
} else {
  console.log("atlyginimas toks pats");
}




// UZDUOTIS

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


//
//
// // 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// su break; sustabdo FOR cikla


// // 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

var arRadau=false;
for (var i = 0; i < 50; i++) {
  // tikriname ar vardas yra Rico
if (names[i] == "Rico") {
  console.log("Radau Rico. Jo numeris:" + i);
  arRadau=true;
    }
}

if (arRadau) {
  console.log("Rico radau");

}else {
  console.log("Rico neradau..Bandykite kita zodi");
}



//
// // 2 UZDUOTIS (f-ja ieskom stalciaus)
// // parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// // eg: getStalciausNumeris( ieskomasTekstas)

  function getStalciausNumeris (xxx) {
        var arRadau=false;
  }



    for (var i = 0; i < 50; i++) {

if (names[i] == xxx ) {
      arRadau=true;
      // nutraukia ne tik cikla, bet ir visa funkcija
      return i;
      // return -1; funkcija nutrauks darba
    }
}

if (arRadau) {
  return -1;
  // sitas niekad neivyks
  return null;
  }
 }
var getStalciausNumeris ("Treva");
console.log(nr);
console.log(getStalciausNumeris(getStalciausNumeris("Treva"));






// // uzduots:----------------------------
// // 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// // 4) rasti visu zmoniu vardu "Rico" pavardes
// // 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
//
// // var a = Math.random(); // 0 - 1
// // if ( a <= 0.1) {
// //     console.log("laimejai");
// // }
