// 1) pasikartoti java script “return” zodeli
// 2 UZDUOTIS
// sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.
// patikrinti ar veikia f-ja

var alga = 500;
var pavarde = "Pietkus";
function getPavarde() {
  return pavarde;
}
console.log("Pavarde: " + getPavarde());


// 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”

document.querySelector("body h2").innerHTML += " uz lango singa, kad ir kai pkeista ";

// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById??????('manoDiv').offsetHeight;)
// A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// B) su js paimti jo auksti ir atspausdinti

var aukstis = document.querySelector("section").offsetHeight;
console.log("Section aukstis yra: " + aukstis);
