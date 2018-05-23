console.log("Labas ");

var prekiautojai = []; // empty array

prekiautojai[0] = "IKI";
console.log(  "prekybos centrai:", prekiautojai  );

prekiautojai[1] = "Maxima";
prekiautojai[2] = "Lidl";
prekiautojai[3] = "Rimi";
prekiautojai[50] = "Cia Market";

// A)
prekiautojai[1] = "Barbora";
console.log("dabar pirmas yra: " + prekiautojai[1]);

// B)============================

console.log("pries pakeitima " + prekiautojai[2]);
console.log("pries pakeitima " + prekiautojai[3]);

var temp = prekiautojai[2];
prekiautojai[2] = prekiautojai[3]; //ikeliu i antra stalciu trecio duomenis
prekiautojai[3] = temp; //treciam priskiriu issisaugota reiksme

console.log("po pakeitima " + prekiautojai[2]);
console.log("po pakeitima " + prekiautojai[3]);

// C)=============================
function prekiautojuKeitimas (nr1, nr2) {
    var temp = prekiautojai[nr1];
    prekiautojai[nr1] = prekiautojai[nr2];
    prekiautojai[nr2] = temp;
}

console.log("antras stalcius: " + );
prekiautojuKeitimas ("pries sukeitima "0, 5)
console.log("trecias stalcius: " + prekiautojai[]);




//
