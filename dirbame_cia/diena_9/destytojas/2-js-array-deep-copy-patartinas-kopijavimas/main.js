console.log("Labas ");


console.log("labas");

// =================taisyklingas Array copy  =================
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// ================= ========= ======== ========

// -----patartinas masyvo kopijavimas
var masyvas1 = ["TOmas", "Jurgis", "Antanas"];
var masyvas2 = masyvas1;

console.log("pries redaguojant m1:", masyvas1 );
console.log("pries redaguojant m2:", masyvas2 );
/// idedam i masyvas1
masyvas1[1] = "Joninessssss";
console.log("PO -masyvas1-  redagavimo m1:", masyvas1 );
console.log("PO -masyvas1-  redagavimo m2:", masyvas2 );

// del to kad buvo nukopijuota ,,prastai" abu sie masyvai yra tas pats masyvas.
// Keiciant vien-keisis ir kitas (nes tai tas pats masyvas)
// !!!! kopijuoti masyvu negalima su  "=" var masyvas2 = masyvas1;
// !! iseitis:
//  var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
//  var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ! ne "splice()" !!
