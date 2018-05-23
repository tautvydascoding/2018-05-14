


// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
 var masyvas=[];
for (var i = 0; i < 50; i++) {
  masyvas[i] = 0;
}
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var x =0;
var m = [];
// ar tiesa? (kol ties - tol dirbu)
while (x<50) {
  m[x] = 1;

// pasitikrinti ar salyga kazkada pakis
console.log("while" + x);
x++;
}
console.log(m);




// 5.2: kas antra ^ masyvo elementa pakeisti i 3
// // naudojame masyva uzpildyta vienetais (50x ilgumo)
// / [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....



//   0      1            3
for (var i = 1; i < 50 ; i = i + 2 ) {
  // 2 veiksmas
  m[i] = 3;

}
console.log("pakeistas mayvas:", m);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....






//=============bootstrap---sm-md-lg-xl (30-60m)==========
