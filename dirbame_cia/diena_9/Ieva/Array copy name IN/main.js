console.log("Labas ");
console.log("labas");

// // =================taisyklingas Array copy  =================
// // NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========

/// PATARTINAS MASYVŲ KOPIJAVIMAS

// var masyvas1 = ["Tomas", "Tadas", "Karolis"];
// var masyvas2 = masyvas1;
// console.log("prieš redaguojant masyvas1:" + masyvas1);
// console.log("prieš redaguojant masyvas2:" + masyvas2);
//
// //įdedame į masyvas1
//
// masyvas1.splice(1, 0, "Jonas");
// console.log("po redagavimo masyvas1:" + masyvas1);
// console.log("po redaguovimo masyvas2:" + masyvas2);



// UZDUOTIS



// // 0 UZDUOTIS ----

    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite" arba 'atlyginimas toks pats'

//     var atlyginimas = 700;
//     var arPasikeite = false;
//     atlyginimas += 100;  // atlyginimas = atlyginimas + 100;
//
//     if ( atlyginimas > 500) {
//         arPasikeite = true;
//       }
//
//
//       if (arPasikeite ) {
//
//   console.log("Atlyginimas pasikeitė");
// } else {
//   console.log("Atlyginimas nepasikeite");
//}

ieskomiZmones =[2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// // 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// // 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

// for (var i = 0; i < names.length; i++) {
//
//   if (names[i] == "Rico") {
// console.log("Masyve names vardas Rico yra:" + i);
//
// }
//   }

// var arRadau = false;
//
// for (var i = 0; i < names.length; i++) {
//
//     if (names[i] == "Rico") {
//
//         arRadau = true;
//         console.log("RADAU, VIETA:" +i);
//         break;
//     }
//
//      if  (arRadau == false) {
//
//
//     console.log("nepavyko");
//   }
// }



//
// // // 2 UZDUOTIS (f-ja iekom stalciaus)
// // // parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// // // eg: getStalciausNumeris( ieskomasTekstas)
//
// function getStalciausNumeris(xxx) {
//
// var arRadau = false;
//
// for (var i = 0; i < names.length; i++) {
//
//     if (names[i] == "xxx") {
//
//         arRadau = true; // radau
//         return i;
//
//       }
//
//     }
//       if (arRadau == false) {
//         return - 1;
//
//     }
// }
//
// var nr = getStalciausNumeris("Treva");
// console.log(nr);

// arba funckija iškviečiame konsole.log su funkcija viduje.


// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

  // var zmogausNr = names.indexOf("Piper");
  //
  // var ieskomaPavarde = lastNames[zmogausNr];
  // console.log("Ieskoma pavarde:" + ieskomaPavarde);



// 4) rasti visu zmoniu vardu "Rico" pavardes

// var rastieji = [];
// //ieškome visų Rico
// for (var i = 0; i <= names.length; i++) {
//
//     if (names[i] == "Rico") {
//
//       rastieji.push(lastNames [i]);
//
//     } else {
//
//
//     }
//
// }
// console.log("Rico pavardes:" + rastieji);

//5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus




ieskomiNumeriai = [2, 16, 17, 18, 19, 25];

for ( i = 0; i < ieskomiNumeriai.length; i++) {
    var x = ieskomiNumeriai[i];


    console.log ("vardas:" + names[x] + "," + "pavarde:" + lastNames[x]);

}

//
// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
