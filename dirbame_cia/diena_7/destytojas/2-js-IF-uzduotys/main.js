console.log("Labas ");


//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Juozapas";

//  ar vardai nelygus?
if( vardas1 == "Tomas"){

    if (vardas1 != vardas2) {
        console.log( vardas1, vardas2,  " abu vardai NEvienodi");
    } else {
        console.log(  vardas1, vardas2, " abu vardai vienodi");
    }
}

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
console.log("tikrinsiu ar vardas1 yra: Tomas");
if (vardas1 == "Tomas") {
    console.log("Labas " + vardas1);
}
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
console.log("tikrinsiu ar vardai yra: Tomas ir Karolis");
vardas1 = "Tomas111111";
vardas2 = "Karolis";
 if (vardas1 == "Tomas" && vardas2 == "Karolis") {
     document.write( "vardai yra: Tomas ir Karolis <br>" );
 } else {
     document.write( "!! vardai NERA: Tomas ir Karolis <br>" );
     document.querySelector('h1').innerHTML  += "<p> aaaa </p>";
 }

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba


// 1 UZDUOTIS
// turesime vartotojo amziu
var age = 6;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


// Salygos:
var age = 100;

if ( age < 7 || age > 65) {
    document.querySelector('h1').innerHTML  += "<p> Sokoladines varles</p>";
    if (age < 7) {
        document.querySelector('h1').innerHTML += "<p> Pliusines varles </p>";
    } else {
        document.querySelector('h1').innerHTML += "<p> Kelione i Birstona </p>";
    }
} else if ( age < 14) {
    document.querySelector('h1').innerHTML  += "<p> Mini telefonai </p>";
} else if ( age < 18) {
    document.querySelector('h1').innerHTML  += "<p> new Music App </p>";
} else if ( age < 24) {
    document.querySelector('h1').innerHTML  += "<p> Stok i sauliu sajunga</p>";
}
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
