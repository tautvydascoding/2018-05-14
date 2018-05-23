// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
    // console.log("for"+i);
}
console.log(masyvas);
// ===================================
// kol tiesa tol  dirba
var x = 0;
var m = [];
while (x < 50) {
    console.log("y" + x);
    x++;
    m[x] = 1;
}
console.log(m);
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;



// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// naudojame masyva uzpildyta 1 "m" 50

for (var i = 1; i < 15; i = i + 2) {
    m[i] = 3;

}

console.log("pakeistas masyvas:", m);


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
