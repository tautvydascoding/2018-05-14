console.log("Labas ");


// sukurt masinos duomenu masyva": pavadinimas, rida, kaina
// 1. isvesti masyvo duomenis
// 2. Padidinti kaina 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas"Tomas
// 4.1. atspausdinti  pakeistus masyvo naujus duomenis
//5.






var masina1 = ["Audi", 250000, 3000.99];
console.log("masinos pavadinimas", masina1[0]);
console.log("masinos rida", masina1[1]);
console.log("masinos kaina", masina1[2]);
masina1[2] = 3100.99;
console.log("masinos nauja kaina", masina1[2]);
masina1[1] = masina1[1] + (-50000);
console.log("masinos rida", masina1[1]);
masina1[3]="Tomas";
console.log("masinos savininkas:",  masina1[3]);

document.querySelector("body").innerHTML+="masinos rida:" + masina1[1];
document.querySelector("body").innerHTML+="masinos aina:" + masina1[2];
document.querySelector("body").innerHTML+="masinos savininkas:" + masina1[3];

masina1[4]="2004";

document.querySelector("h2").innerHTML+="masinos pavadinimas: " + masina1[0];
document.querySelector("div").innerHTML+="Savininko vardas: " + masina1[3];
document.querySelector("span").innerHTML+="masinos rida: " + masina1[1];
document.querySelector("button").innerHTML+="masinos metai: " + masina1[4];
