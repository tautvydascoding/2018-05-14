console.log("Labas ");

// UZDUOTIS
var prekiautojai = []; // empty array

prekiautojai[0] = "IKI";

prekiautojai[1] = "Maxima";
prekiautojai[2] = "Lidl";
prekiautojai[3] = "Rimi";
prekiautojai[50] = "Cia Market";

console.log(  "prekybos centrai:", prekiautojai  );
// A) pervadinti pirma stalciu
prekiautojai[1] = "Barbora";
console.log(  "prekybos centrai:", prekiautojai  );


// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
var temp = prekiautojai[3];
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = temp;
console.log(  "po sukeitimo prekybos centrai:", prekiautojai  );
// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)



// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
function sukeistiMasyvo2elementus(x,y) {
  var temp = prekiautojai[y];
  prekiautojai[y] = prekiautojai[x];
  prekiautojai[x] = temp;
  console.log(  "po sukeitimo prekybos centrai:", prekiautojai  );
}
sukeistiMasyvo2elementus(0,1);
sukeistiMasyvo2elementus(0,35);



//--Array / Masyvai  TEORIJA (~2h)--------------------
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
console.log("Pries idedant unshift:" + keliautojas);

keliautojas.unshift( "1994/04/03" ); //idedame i masyvo prieki
console.log("Po idedant unshift:" , keliautojas);

var ilgis = keliautojas.length; // nustatome ilgi masyvo
console.log("masyvo ilgis:" + ilgis);
//triukas paskutiniam elementui rasti
keliautojas[ilgis] = "baige su pagirymu"; // galima ideti i elemento gala su length
console.log( "pridedame ilgi", keliautojas);

//.join() skliausteliuose nurodome skyrikli
console.log( keliautojas.join("; "));
//arba
console.log(keliautojas.toString()  ); //pavercia i stringa

//i masyvo gala idedame .push()
keliautojas.push("2018-05");
console.log("po idejimo i gala:" , keliautojas);

//istrinti is galo .pop()
keliautojas.pop(); //skiausteliai tusti, nes triname
console.log("po istrynimo:", keliautojas);

//istrinti is priekio .shift() ir paslenka viska i prieki
keliautojas.shift();
console.log("po istrinimo pradzioje:", keliautojas);

//Delete masyvas[stringas], istrina tik stalciaus turini, niekas nepasislenka
delete keliautojas[2];
console.log("po istrinimo delete 2:", keliautojas);

//splice() - iterpti, istrinti
keliautojas.splice(1,2);
console.log("naudojama splice komanda:", keliautojas);
//slice() - dalies kopija

console.log("naudojame slice kom", keliautojas.slice(2));


// =========================================================
// uzduotis  Array
keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push("butelis vandens");
console.log("keliautojas gauna buteli:", keliautojas);
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis");
console.log("keliautojas gauna ziebtuveli:", keliautojas);
// 3. istrinti 3-cia elmenta
keliautojas.splice(2,1);
console.log("istriname 3elementa", keliautojas);

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
var sk = [];
for (var i = 0; i < 50; i++) {
 sk.push(0);
}
  console.log("masyvas 50 elem:", sk );
  // arba
  for (var i = 0; i < 50; i++) {
    sk[i] = 0; // priskiriame i masyvo vienam stringui, taip galima pakartoti ta elementa kiek kartu jis vyksta
  }
  console.log( sk);

//while TEORIJA
// var x = 0;
//ar tiesa? (kol tiesa tol veikia)
// while (x < 50) {
  //patikrinti ar salyga kazkada baigsis
//   console.log("while" + x ); x++;
// }
  // 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var x = 0;
var m = [];
while (x < 50) {
  m[x] = 1;
  x++;
}
console.log( m );
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 1; i < 50; i += 2) { //i dideja kas antra nuo paprastai nuo 0, bet dabar nuo 1 i = i + 2, tai 0 = 0 + 2
  sk[i] = 3;
}
console.log("keiciame i 3 kitus", sk);
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 4; i < 50; i+= 5) {
  sk[i] = 9;
}
console.log("keiciame i 9 kitus", sk);
