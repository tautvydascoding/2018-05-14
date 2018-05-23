console.log("masyvai");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
	// UZDUOTIS
	var prekiautojai = []; // empty array

	prekiautojai[0] = "IKI";
	prekiautojai[1] = "Maxima";
	prekiautojai[2] = "Lidl";
	prekiautojai[3] = "Rimi";
	prekiautojai[50] = "Cia Market";
  console.log( "prekybos centrai: ", prekiautojai);

	// A) pervadinti pirma stalciu
	prekiautojai[1] = "Barbora";
  console.log("prekybos centrai: ", prekiautojai);


	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
console.log("pries sukeiciant 2 ir 3 stalciu: ", prekiautojai);

  var temp = prekiautojai[3];    //3 stalcius   //temp - laikinas galima rasyti beleka , bet terminas yra  temp
  prekiautojai[3] = prekiautojai[2]; // 2 stalcius
  prekiautojai[2] = temp;        // 3 stalcius

  console.log("po sukeitimo: ", prekiautojai);

	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)




  function sukeistiMasyvo2elementus(x, y){
    var temp = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = temp;

  }


  console.log("pries sukeiciant 2 ir 3 stalciu: ", prekiautojai);
  sukeistiMasyvo2elementus(0, 3);
  console.log("po sukeitimo: ", prekiautojai);


// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
//names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];




//console.log(names);

//.length
//.join()
//.shift()
//.pop()



// =========================================================
// uzduotis  Array
//keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

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
