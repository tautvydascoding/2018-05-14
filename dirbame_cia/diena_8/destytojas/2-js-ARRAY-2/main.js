console.log("Labas ");
// UZDUOTIS
var prekiautojai = []; // empty array

prekiautojai[0] = "IKI";
prekiautojai[1] = "Maxima";
prekiautojai[2] = "Lidl";
prekiautojai[3] = "Rimi";
prekiautojai[90] = "Cia Market";

console.log(  "prekybos centrai:", prekiautojai  );
//
// // A) pervadinti pirma stalciu
prekiautojai[1] = "Barbora";

// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

console.log(" pries sukeician 2 ir 3 stalciu: ", prekiautojai);
var temp = prekiautojai[3];    // 3
 prekiautojai[3] = prekiautojai[2];   // 2
 prekiautojai[2] = temp;       // 3

 console.log(" Po sukeitimo: ", prekiautojai);


// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus( nr1, nr2)

function sukeistiMasyvo2elementus(x, y) {
        var temp = prekiautojai[ x ];    // 3
         prekiautojai[ x ] = prekiautojai[ y ];   // 2
         prekiautojai[ y ] = temp;       // 3
}

console.log(" pries sukeician 2 ir 3 stalciu: ", prekiautojai);
sukeistiMasyvo2elementus(0, 3);
 console.log(" Po sukeitimo: ", prekiautojai);
