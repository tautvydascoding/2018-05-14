console.log("Labas ");


// UZDUOTIS:
// sukurti masinos duomenu masyva: pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
// sunkesne:
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas
//      <div> savininko vardas: ...
//      <span> masinos metai: ...  Rida: ...
//      i mygtuka ideti: masinos kaina ....
// </article>
var masina1 = [ "Audi", 250000, 3000.99];

console.log( "masinos pavadinimas: ",    masina1[0]   );
console.log( "masinos rida: ",    masina1[1]   );
console.log( "masinos kaina: ",    masina1[2]   );

masina1[3] = "Tadas";

document.querySelector('body').innerHTML += "<article>  aa</article>";
document.querySelector('article').innerHTML += "<h2> " + masina1[0] + " </h2>";
document.querySelector('article').innerHTML += "<div> savininkas: " + masina1[3] + " </div>";


var tekstas = "Jurgautas ejo" + masina1[1] +  " kilometru atgal ";
//            "Jurgautas ejo  250000  kilometru atgal "
