// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
	// UZDUOTIS
	var prekiautojai = ["IKI", "Maxima", "Lidl", "Rimi", "Cia Market" ]; // empty array

	prekiautojai[0] = "IKI";
	console.log(  "prekybos centrai:", prekiautojai  );
	prekiautojai[1] = "Maxima";
	prekiautojai[2] = "Lidl";
	prekiautojai[3] = "Rimi";
	prekiautojai[50] = "Cia Market";

	// A) pervadinti pirma stalciu
	prekiautojai[1] = "Barbora";

	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
 console.log("pries sukeiciant natra ir trecia stalciu:",prekiautojai );
var x = prekiautojai[3];
 prekiautojai[3] = prekiautojai[2];
 prekiautojai[2] = x;
console.log("Po sukeitimo:", prekiautojai);


	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
 function sukeistiMasyvoElementus (x,y) {
   var temp = prekiautojai[x] ;
   prekiautojai[x]  = prekiautojai [y];
   prekiautojai[y] = temp;
 }
console.log("pries sukeiciant 2 ir 3 stalciu:", prekiautojai);
sukeistiMasyvoElementus (0, 3);
console.log("Po sukeitimo:", prekiautojai);



// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
//
// // .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
