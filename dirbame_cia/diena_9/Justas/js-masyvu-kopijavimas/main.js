

// =================taisyklingas Array copy  =================
// // // NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// // var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// // var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// // var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// // // ================= ========= ======== ========
//
//
// // patartinas masyvu kopijavimas
// var masyvas1 = ["Tomas", "Jurgis", "Antanas"];
// var masyvas2 = masyvas1;
//
// console.log("pries redaguojant m1: " , masyvas1);
// console.log("pries redaguojant m2: " , masyvas2);
// //idedam i masyva1
// masyvas1[1] = "Joninessssss";
// console.log("po - masyvas1 redagavimo: " , masyvas1);
// console.log("po - masyvas2 redagavimo: " , masyvas2);
// del to kad nukopijuota buvo blogai tai abu masyvai yra tas pats masyvas, keiciant viena keiciasi ir kitas (nes tai tas pats masyvas)



//
// // 0 UZDUOTIS ----
//     var atlyginimas = 500;
//     var arPasikeite = false;
//     // UZDUOTIS
//     // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
//     atlyginimas += 100;  // atlyginimas = atlyginimas + 100;
//
//
//
// if (atlyginimas > 500) {
//     arPasikeite = true;
// }
//
// if (arPasikeite) {
//     console.log(" atlyginimas pasikeite");
// } else if (arPasikeite){
//     console.log('atlyginimas toks pats');
// }


var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
