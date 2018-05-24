console.log("Labas ");

// ////////// patartinas masyvo kopijavimas

var masyvas1 = ["Tomas", "Jurgis", "Antanas"];
var masyvas2 = masyvas1;
console.log("pries redaguojant m1: ", masyvas1);
console.log("pries redaguojant m2: ", masyvas2);
// idedam masyvai
masyvas1[1] = "Jonas";
console.log("PO -masyvas1- redagavimo m1: ", masyvas1);
console.log("PO -masyvas2- redagavimo m2: ", masyvas2);
// del to kad buvo nukopijuota "paprastai" abu sie masyvai yra tas pats masyvas1
// keiciant viena keisis ir kitas.
