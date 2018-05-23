// console.log("Labas ");
//
// var masyvas = [];
//
// for (var i = 0; i < 50; i++) {
//     masyvas[i] = 0;
//     // console.log("for" + i); //pasitikrinti su konsole
// }
// console.log(masyvas);
//
// // ============
//
// // 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// var x = 0;
// var m = [];
// // as tiesa? (kol tiesa to dirba)
// while (x < 20) {
//
//     // console.log("while" + x);//pasitikrinti su konsole
//
//     m[x] = 1;
//     // m.push(1);//alternatyva
//     console.log(m);
//
//     x++;// !!!patikrinti ar salyga kadanors pasibaigs (uzsiciklins)



// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
var m = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
for (var i = 1; i < 10; i = i + 2) { // irgi i += 2
    m[i] = 3;

}
console.log(m);

for (var i = 4; i < 10; i += 5) { // irgi i += 2
    m[i] = 9;

}
console.log(m);
