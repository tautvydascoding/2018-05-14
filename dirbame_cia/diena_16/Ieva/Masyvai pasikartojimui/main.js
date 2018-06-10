// console.log("Labas ");
//
//
// // $('h1').hide(3000);
//
// // $('h1').css('color', 'pink');
//
// // ========js best practice & common mistakes (~2h)
//
// // UZDUOTIS:
// // sukurti masinos duomenu masyva: pavadinimas, pravaziuota rida, kaina
// var masyvasMasina  = ["Audi", 5500, 20000];
//
// // 1. isvesti masyvo duomenis
// console.log("Mašinos pavadinimas: ", masyvasMasina[0], ", Mašinos rida: ", masyvasMasina[1], " km,  Mašinos kaina:", masyvasMasina[2], " Eur");
// console.log(masyvasMasina);
//
// // 2. padidinti kaina: 100
// masyvasMasina[2]=20100;
// console.log("Masinos nauja kaina:", masyvasMasina[2]);
//
//
// // 3. padidinti rida: -50000
// masyvasMasina[1]=masyvasMasina[1]-500;
// console.log(masyvasMasina);
//
// // 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// masyvasMasina[3]="Tomas";
// console.log(masyvasMasina);
//
// // 4.1 atspausdinti pakeistus masyvo duomenis
//
// // 5. i masyva ideti papildomus duomenis: masinos metai "2004"
//
// masyvasMasina[4]=2004;
// console.log(masyvasMasina);
//
// // sunkesne:
// // 6. atspausdinti masyvo duomenis i ekrana:
// // <article>
// //      <h2> pavadinimas </h2>
// //      <div> savininko vardas: ...</div>
// //      <span> masinos metai: ...  Rida: ...</span>
// //      i mygtuka ideti: masinos kaina ....
// // </article>
//
// document.querySelector('body').innerHTML+=("<article></article>");
// document.querySelector('article').innerHTML+=("<h2> Automobilio pavadinimas: " +masyvasMasina[0]+ " </h2>");
// document.querySelector('article').innerHTML+=("<div> Savininko vardas: " + masyvasMasina[3] +" </div>");
// document.querySelector('article').innerHTML+=("<span> Automobilio metai: " + masyvasMasina[4] + ",  Rida: " + masyvasMasina[1]+ " km </span>");
// document.querySelector('article').innerHTML+=("<button> Kaina: "+ masyvasMasina[2] +" Eur </button>");
// $('button').addClass('btn bg-info');
// $('article').css('background-color', 'grey');
//
//
//
//
//
// //=============bootstrap---sm-md-lg-xl (30-60m)==========
//
// // ========js best practice & common mistakes (~2h)
//
// // -------- --Array / Masyvai  TEORIJA (~2h)--------------------
// 	// UZDUOTIS
// 	var prekiautojai = []; // empty array
//
// 	prekiautojai[0] = "IKI";
//   prekiautojai[1] = "Maxima";
//   prekiautojai[2] = "Lidl";
//   prekiautojai[3] = "Rimi";
//   prekiautojai[4] = "Cia Market";
// 	console.log(  "prekybos centrai:", prekiautojai  );
//
//
// // 	A) pervadinti pirma stalciu
// 	prekiautojai[1] = "Barbora";
//
// console.log("su barbora: " + prekiautojai);
//
// // 	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
// // 	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
//
// // var temp = prekiautojai[1];
// // prekiautojai[1] = prekiautojai[2];
// // prekiautojai[2] = temp;
// // console.log("po sukeitimo:", prekiautojai);
//
//
// // 	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
//
//
//   function sukeistiMasyvo2elementus(x, y) {
//         var temp = prekiautojai[x];
//         prekiautojai[x] = prekiautojai[y];
//         prekiautojai[y] = temp;
//         console.log("po funkcijos sukeitimo", prekiautojai);
//  }
//     sukeistiMasyvo2elementus(1, 2);
//
//
// // // -------- --Array / Masyvai  TEORIJA (~2h)--------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
// //
// // .length
// // .join()
// // .shift()
// // .pop()
// //
//
// // // 1. i masyvo gala ideti elmenta "butelis vandens"
//
// names.push("butelis vandens");
// console.log("po naudo idejimo i gala: " + names);
//
// // // 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
//
// names.unshift("Ziebtuvelis");
// console.log("idejau Ziebtuvelis:" , names);
//
// console.log("masyvo names ilgis:" , names.length);
//
// console.log( names.join("....."));
// console.log( names.toString() );
//
// // // 3. istrinti 3-cia elmenta
// console.log("iki splice", names);
//
// names.splice(3, 1);
// console.log ("po splice:" , names);
//
//
//
// // // 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
//
// var masyvas = [];
// for (i=0; i < 50; i++) {
//   masyvas[i] = 0;
// }
// console.log("su nuliais" + masyvas);
//
// // // 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
//
// var i=0;
// var mas = [ ];
//     while ( i < 50 ) {
//       mas[ i ] = 1;
//       i++;
//     }
//
//   console.log("su vienetais" + mas);
//
// // // 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// // // [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
//
//   for (i = 1; i < 50; i+=2){
//     mas[i]=3;
//   }
// console.log("pakeistas su 1, 3 --- " + mas);
//
//
// // // 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// // // [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
//
// for (i=4; i<50; i+=5){
//   mas[i]=9;
// }
// console.log("pakeistas su 1, 3, 1, 3, 9, 3, 1, 3, 1, 9 --- " + mas);
// // //=============bootstrap---sm-md-lg-xl (30-60m)==========
//
//
// // sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
//
// var vardai=[];
//
// vardai[0] = "Jonas";
// vardai[1] = "Petras";
// vardai[2] = "Povilas";
// vardai[3] = "Kęstas";
// vardai[4] = "Karolis";
//
// console.log("Vardų masyvas:" , vardai);
//
//
// // ) sunaikinti pirma STALCIU VISA
//
// vardai.splice(0,1);
// console.log("Vardų masyvas po pirmo stalčiaus ištrinimo:", vardai);
//
// // ) tarp Petras ir Povilas, iterpti Marija
//
// vardai.splice(1, 0, "Marija");
// console.log("Vardų masyvas Įterpus Marija po Petro:", vardai);
//
// // ) surikiuoti Masyva
// vardai.sort();
// console.log("išrikiuotas masyvas:"+ vardai);
//
// // ) sunaikinti Marijos stalciu
//
// vardai.splice(2,1);
// console.log('ištrinu marijos stalčių:'+ vardai);
//
//
// // ) sukeisti vietomis pirma ir paskutini stalciu
//
// // var temp = vardai[0];
// // vardai[0] = vardai[3];
// // vardai[3] = temp;
// //
// // console.log("sukeista vietomis" + vardai);
//
// function sukeistiStalcius(x,y) {
// 	var temp = vardai[x];
// 	vardai[x] = vardai[y];
// 	vardai[y] = temp;
// 	console.log("sukeista vietomis su funkcija" + vardai);
//
// }
// sukeistiStalcius(0,3);
//
// // ) sukurti masyvo kojipa
//
// var kopija = vardai.slice(0);
// console.log(kopija + "ir" + vardai);
//
// // ) kopijos masyve istrinti nuo 2 iki 4
//
// kopija.splice(2,2);
//
// console.log(vardai + "  ir  " + "kopija po istrynimo " + kopija);
//
// // ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
//
// console.log("originalus masyvas - "+ vardai);
//
// // ) prijungti kopijos masyva prie orginalo masyvos galo
//
// var naujasVardai=vardai.concat(kopija);
//
// console.log("naujas masyvas po concat--- " + naujasVardai);
//
// // 6. sukurti du masyvus (skirtingus)
//
// var auto=["audi", "opel", "bwm"];
// var spalva=["raudona", "geltona", "zalia"];
//
// // naudojant for cikla sujungti juos, kas antra elementa
// // [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
//
// var naujas = [];
//
//   for (var i = 0; i < auto.length; i++) {
//     naujas.push(auto[i], spalva[i]);
//   }
// 		console.log(naujas);
//
//
//
//
// // sunkesnis
// // susikurti masyva su prekiu pavadinimais
// // naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// // ! nenaudojant "reverse"
//
//
// // ---- -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-----
// // 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
// // 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla
// // 1.4 Atspausdinti kas antra data
// // 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)
//
//
var datos = [1981, 1980, 1975, 1995, 1999];
for (var i=0; i<datos.length; i++) {
	console.log("datos su for ciklu: " + datos);
}

i = 0;
while (i<datos.length) {
	console.log("datos su while ciklu: " + datos);
	i++;
}

for (var i=0; i<datos.length; i+=2) {
		console.log("datos kas antra data: " + datos[i]);
}

for (var i=2; i<datos.length; i++) {
		console.log("datos nuo trecios: " + datos[i]);
}
