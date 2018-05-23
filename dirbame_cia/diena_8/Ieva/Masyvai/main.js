// -------- --Array / Masyvai  TEORIJA (~2h)--------------------

// IDEA: sukurti masinos duomenu masyva//
//var masina1 = ["Audi", 250000, 3000.99];
// IDEA: iŠvesti masyvo duomenis

//console.log("masinos pavadinimas:", masina1[0]);
//console.log("masinos rida:", masina1[1]);
//console.log("masinos kaina:", masina1[2]);





// padidinti kaina: 100

//masina1[2] = 3100.99;
//console.log("Nauja masinos kaina:", masina1[2]);



// padidinti rida: -50000

//masina1[1] = masina1[1]+(-50000);


// i masyva ideti papildomus duomenis : savininko vardas "Tomas"

//masina1[3] = "Tomas";
//console.log(masina1[3]);


// i masyva ideti papildomus duomenis : masinos metai "2004"

//masina1[4]=2004;
//console.log("Masinos metai", masina1[4]);


// atspausdinti ekrane

//document.querySelector("body").innerHTML+="<article> <h2>   </h2>  </article> ";
//document.querySelector("h2").innerHTML+="Masinos pavadinimas:" + masina1[0] + "<br>";
//document.querySelector("div").innerHTML+="Savininko vardas:" + masina1[3] + "<br>";
//document.querySelector("span").innerHTML+="Masinos metai:" + masina1[4] + "<br>";
//document.querySelector("span").innerHTML+="Masinos rida:" + masina1[1] + "<br>";
//document.querySelector("button").innerHTML+="Masinos kaina:" + masina1[2] + "<br>";

  // UZDUOTIS
	var prekiautojai = []; // empty array

	prekiautojai[0] = "IKI";
	prekiautojai[1] = "Maxima";
  prekiautojai[2] = "Lidl";
	prekiautojai[3] = "Rimi";
	prekiautojai[50] = "Cia Market";

  console.log(  "Prekybos centrai:", prekiautojai  );

	// A) pervadinti pirma stalciu
	//prekiautojai[1] = "Barbora";

prekiautojai[1]= "Barbora";
console.log( "Prekybos centrai:", prekiautojai);


	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
console.log("Prekybos centrai pries sukeiciant:", prekiautojai);

var temp = prekiautojai[3];
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = temp;


console.log("Prekybos centrai: po sukeitimo", prekiautojai);


	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function sukeistiMasyvo2elementus (x, y) {
  var temp = prekiautojai[y];
  prekiautojai[y] = prekiautojai[x];
  prekiautojai[x] = temp;
}
sukeistiMasyvo2elementus(2, 3);
console.log("PREKYBOS CENTRAI PO FUNKCIJOS PAKEITIMUI:", prekiautojai);


// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(keliautojas);

//.join()
//.shift()
//.pop()



// =========================================================
// uzduotis  Array
//keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"

keliautojas[4]="butelis vandens";
console.log("Masyvas su pakeitimu:", keliautojas);

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas[4]="žiebtuvėlis";

console.log("Masyvas su ketvirta vieta:", keliautojas);

var temp = keliautojas[5];
keliautojas[5]=keliautojas[0];
keliautojas[0]=temp;

console.log("Masyvas su žiebtuvėliu pakeitus :", keliautojas);

// 3. istrinti 3-cia elmenta

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========console.log("Labas ");
