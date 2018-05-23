console.log("Labas ");
console.log("Labas rytas");

// =================if  teorija====================
 //if ( true ) {
    //console.log("labas");
  //}

//console.log("UZDUOTIS-IF, ELSE");
//var x = 600;
//if ( x <= 100) {
//console.log("Reika uzsakyti daugiau prekiu");
//}

 //else {
//console.log ("Pardavinejame toliau");
//}

//var x = 1000; ///kintamieji failo viršuje, kuo daugiau kintamuju naudoti reikia
//var minimalusKiekis = 100;
///if ( x <= minimalusKiekis) {
//console.log("Reika uzsakyti daugiau prekiu");
//}

 //else {
//console.log ("Pardavinejame toliau");
//}
// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
//console.log("UZDUOTIS 0, A");
//var vardas1 = "Tomas";
//var vardas2 = "Juozas";

//(vardas1 == vardas2) ? console.log(vardas1) : console.log("Skirtingi vardai");


//console.log("antras budas");
//if (vardas1 == vardas2) {
//  console.log(vardas1, vardas2, "Vardai sutampa");
//}
  //else {
    //console.log(vardas1, vardas2, "Vardai skirtingi");
//}

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

//console.log("Uzduotis B");
// tikrinant stringus nelygu !=
//if (vardas1 == "Tomas") {
//      console.log("Labas," , vardas1);
//}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
//console.log("tikrinsiu ar tomas yra vardas1 ir butinai karolis vardas2");

 //if ( vardas1 == "Tomas" && vardas2 == "Karolis") {
  //  console.log("Taip:", vardas1, vardas2);
// }

 //else {
//   console.log("Ne:", vardas1, vardas2);

 //}




// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

//console.log("Uzduotis: D - ar bent vienas vardu Tomas");

//if ( vardas1 == "Tomas" || vardas2 == "Tomas") {
   //console.log("Taip:", vardas1, vardas2);
////}

//else {
  //console.log("Ne:", vardas1, vardas2);

//}

// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

console.log("1 uzduotis - apie amziu");

var age =10;
if (age < 7  || age > 65) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
    if (age < 7) {
      console.log("Pliusines varles");
    }
  else {
  console.log("Kelione i Birstona");
  }
    } else if (age >7 && age < 14) {
      console.log("Mini telefonai");
    } else if (age > 14 && age < 18) {
      console.log("New music app");
    } else if (age >18 && age < 25) {
      console.log ("Stok i sauliu sajunga");
    } else if (age >24 && age < 65) {
      console.log("Pensijos kaupimas");
    } else if (age > 65) {
      console.log("Kelione i Birstona");

    }


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


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
console.log("2 UZDUOTIS");
vardas1 = "Tomas";
vardas2 = "Paulius";
vardas3 = "Airidas";
var klientas = "Paulius";

if (klientas === vardas1) {
  console.log("Masinoms 10proc. nuolaida");
} else if ( klientas === vardas2) {
  console.log("Buitinei technikai 30proc nuolaida");
} else {
    console.log("5 proc nuolaida kelionems");
}


// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

console.log("3 uzduotis");
