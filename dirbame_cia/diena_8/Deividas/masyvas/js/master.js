console.log("labs");

//sukurti automobilio duomenu masyva: pav. pravaziuota rida , kaina
//1. isvesti masyvo duomenis
//2.padidint kaina 100
//3.padidint rida -50000
//4.ideti i masyva papildomus duomenis : savininkas "Tomas"
//4.1 atspausdinti pakeistusmasyvo duomenis
//5. i masyva ideti papildomus duomenis: masinos metai " 2004"
//sunkiau
//6.atspausdinti masyvo duomenis i ekrana:
//<article
//      <h2> pavadeinimas
//      <div> savininko vardas:..
//      <span> masinos metai: ...Rida....
//      i mygtuka ideti masinos kaina
// </article>

var masina1 = ["Audi", 250000, 3000.99];
//isvesti masyvo duomenis
console.log( "masinos pavadinimas: ", masina1[0]);
console.log( "masinos rida: ", masina1[1] );
console.log("masinos kaina: ", masina1[2]);


//padidinu kaina 100
masina1[2] = masina1[2] + 100;

console.log("masinos atnaujinta kaina", masina1[2]);

//padidinti rida -50000

masina1[1] = masina1[1] - 50000;

console.log("masinos rida", masina1[1]);

//papildomi duomenys i masyva : savininko vardas Tomas
console.log("NAUJI DUOMENYS");

var masina1 = ["Audi", 200000, 3100.99, "Tomas"];

function printDuomenis(masina1){
  document.querySelector("body").innerHTML+="<h2>  masinos pavadinimas: " + masina1[0] + " </h2> ";

  document.querySelector("body").innerHTML+="<h2> masinos rida: </h2> ";
  document.querySelector("body").innerHTML+="<h2> masinos kaina: </h2> ";
  document.querySelector("body").innerHTML+="<h2> masinos savininkas: </h2> ";

}

printDuomenis(masina1);


















32
