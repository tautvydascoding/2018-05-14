console.log("Labas ");


$('h1').hide(3000);





// $('h1').css('color', 'pink');
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================


// ===================pasikartoti  F-jas===================
//  01 UZDUOTIS
// sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// atspausdinti visus kintamuosius

var vardas="Laura";
var pavarde="Lauraite";
var klase=3;
console.log("vardas-", vardas, "pavarde-", pavarde, "klase-", klase);

//  02 UZDUOTIS
// sukurti funkcijas:
// printName()  printLName(), printClass() ,
// kurios atspausdina i konsole pirmos uzduoties kintamuosius

function printName() {
  console.log(vardas);
}
printName();


//  03 UZDUOTIS
// parasyti f-ja printVardasPavardeKlase(name, lname, klase)
// kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem

function printVardasPavardeKlase (vardas, pavarde, klase) {
console.log(vardas, pavarde, klase);

}
printVardasPavardeKlase("Tomas", "Tomauskis", 7);
printVardasPavardeKlase("Tadas", "Tadauskis", 3);
printVardasPavardeKlase("Romas", "Romauskis", 9);

// =====================CSS Flex=========================

// 1) suzaisti CSS Frog game

// =====================JS zaidimas=========================

// suzaisti JS zaidima Code Combat
