// sukurti masinos duomenu masyva: pavadinimas, pravaziuota rida, kaina

var masina1 = ["Audi", 250000, 3000.99]
// 1.isvesti masyvo duomenis
// 2.padidinti kaina:100
// 3.padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas Tomas
// 4.1 atspausdinti pakesitus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai '2004"
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
  //    <h2> pavadinimas
  //    <div> savininko vardas
  //    <span> masinos metai...Rida:......
  //    i mygtuka ideti masinos kaina....
  // </article>
console.log("masinos pavadinimas:", masina1 [0]);
 console.log("masinos rida:", masina1 [1]);
 console.log("masinos kaina:", masina1 [2]);

 masina1[2] =3100.99;
console.log(masina1 [2]);


masina1[1] = 200000;
console.log(masina1 [1]);

masina1[3] = "Tomas";
masina1[4] = 2004;

console.log("masinos pavadinimas:", masina1 [0]);
 console.log("masinos rida:", masina1 [1]);
 console.log("masinos kaina:", masina1 [2]);
 console.log("savininkas", masina1 [3]);
 console.log("masinos metai", masina1 [4]);

document.querySelector("article").innerHTML+="<h2>masinos pavadinimas:, " +  masina1[0]+ "</h2>";
document.querySelector("article").innerHTML+="<div>masinos metai:, " +  masina1[4]+ "</div>";
document.querySelector("article").innerHTML+="<span>masinos metai:, " +  masina1[4]+ "masinos rida:," +  masina1 [1]+ "</span>";
