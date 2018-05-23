console.log("Labas ");

// sukurti masinos duomenu masyva: pavadinimas, rida, kaina.
// Isvesti duomenis.
var masina1 = ["Audi", 250000, 3000.99];

console.log("Masinos pavadinimas: " + masina1[0] );
console.log("Masinos rida: " + masina1[1] );
console.log("Masinos kaina: " + masina1[2] );

masina1[2] = masina1[2] + 100;

masina1[1] = masina1[1] + (-50000);

masina1[3] = "Tomas";

console.log("Padidejusi kaina: " + masina1[2]);
console.log("Pasikeitusi rida: " + masina1[1]);
console.log("Masinos savininkas: " + masina1[3]);

masina1[4] = 2004;

// sunkesne

document.querySelector('h1').innerHTML += "<article><h2>" + "Automobilis: " + masina1[0] + "</h2></article>";
document.querySelector('article').innerHTML += "<div>" + "Savininko vardas: " + masina1[3] + "</div>";
document.querySelector('article').innerHTML += "<span>" +"Masinos metai: " + masina1[4] + " Rida: " + masina1[1] + "<br>" + "</span>";
document.querySelector('article').innerHTML += "Kaina: " + "<button>"  +  masina1[2] + "</button>";
