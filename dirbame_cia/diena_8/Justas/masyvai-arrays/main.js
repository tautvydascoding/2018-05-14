console.log("Labas ");

// sukurti masinos duomenu masyva
var masina1 = ["audi", 250000, 3000.99];
// isvesti duomenis
// 1.
console.log("masinos duomenys: " + masina1);

console.log("masinos pavadinimas: " + masina1[0]);
// padidinti kaina 200
//  2.
masina1 [2] = 3000.99 + 200;
console.log("dabartine masinos kaina: " + masina1[1]);
// padidinti rida 50000
// 3.
masina1 [1] = 250000 - 50000;
console.log("dabartine masinos rida: " + masina1[2]);
// 4.
masina1 [3] = "Tomas";
console.log("savininko vardas: " + masina1[3]);
// 5.
masina1[4] = "2004";
console.log("masinos metai: " + masina1[4]);
// 6.
document.querySelector("h2").innerHTML += "<p>" + masina1[0] + "</p>";
document.querySelector("div").innerHTML += "<p>" + masina1[3] + "</p>";
document.querySelector("span").innerHTML += "<p>" + masina1[4] + "&nbsp;" + masina1[1] + "</p>";
document.querySelector("button").innerHTML += "<p>" + masina1[2] + "</p>";
