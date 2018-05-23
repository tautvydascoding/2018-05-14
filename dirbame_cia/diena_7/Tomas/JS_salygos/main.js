//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"


var vardas1 = "Tomas";
var vardas2 = "Tomas";
// ar vardai nelygus
if (vardas1 != vardas2) {
    console.log(vardas1, vardas2, "Skirtingi vardai");
} else if (vardas1 == "Tomas") {
    console.log("Labas Tomai!");
}


// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo



// C)
// Patikrinti ar vardas1 yra "Tomas", IR butinai vardas2  yra "Karolis"
var vardas1 = "Tomas";
var vardas2 = "Jonas";
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    console.log("Labas Tomai ir Karoli");
} else {
    // document.write("vardai NERA Tomas ir Karolis");
    document.querySelector("h1").innerHTML += "<p> Pavojus</p>";
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
var vardas1 = "Tomas";
var vardas2 = "Karolis";
var vardas3 = "Tomas";
if (vardas1 == "Tomas" || vardas2 == "Tomas" || vardas3 == "Tomas") {
    console.log("Yra bent vienas Tomas");
}


// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// pagal ji, turesiem isvesti tam tikra reklamos teksta


// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

var age = 7;
if (age <= 7) {
    console.log("Pliusines varles");
}
if (age <= 7 || age >= 65) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
} else if (age < 14) {
    console.log("Mini telefonai");
} else if (age < 18) {
    console.log("new Music App");
} else if (age < 24) {
    console.log("Stok i Sauliu sajunga");
} else if (age < 65) {
    console.log("Pensijos kaupimas - uzsiregistruok");
} else if (age >= 65) {
    console.log("Kelione i Birstona");
}
// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Tomas - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var vardas = "Paulius";
if (vardas == "Tomas") {
    console.log("Masinoms 10% nuolaida");

} else if (vardas == "Paulius") {
    console.log("Buitinei technikai  30% nuolaida");
} else if (vardas == "Airidas") {
    console.log("5% nuolaida kelionems");
}
