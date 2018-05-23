console.log("Labas ");


var prekiautojai = []; // tuscias masyvas

prekiautojai[0] = "IKI";
console.log("prekybos centrai:", prekiautojai);
//
prekiautojai[1] = "Maxima";
prekiautojai[2] = "Lidl";
prekiautojai[3] = "Rimi";
prekiautojai[50] = "Cia Market";
console.log("prekybos centrai:", prekiautojai);
//

prekiautojai[1] = "Barbora";
console.log(  "prekybos centrai:", prekiautojai  );

//

var x = prekiautojai[2];

prekiautojai[2] = prekiautojai[3];

prekiautojai[3] = x;

console.log(prekiautojai);

//

function sukeistiMasyvo2Elementus (x,y){
  var temp = prekiautojai[x];
  prekiautojai[x] = prekiautojai[y];
  prekiautojai[y] = temp;
}
sukeistiMasyvo2Elementus(2,3);
console.log("PO sukeitimo" + prekiautojai);
