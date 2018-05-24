// console.log("Labas ");
// var masyvas1=["Tomas", "Jurgis", "Antanas"];
// var masyvas2=masyvas1;
//
// console.log("pries -masyvas- redaguojant m1:", masyvas1);
// console.log("po -masyvas- redaguojant m2:", masyvas2);
// // idedam i masyvas1
// console.log("PO -masyvas1- redagavimo m1:", masyvas1);
// console.log("PO -masyvas1- redagavimo m2:", masyvas2);
// del to kad buvo nukopijuota prastai , abu sie masyvai yra tas pats masyvas.
// Keiciant vien-keisis ir kitas ( nes tai tas pats masyvas)
// negalima su "=" var masyvas2=masyvas1
// iseitis:
// var arr2a = arr1.slice(0);
//  var arr2b= arr1.concat();
// ne splice()!
// / 0 UZDUOTIS ----
var atlyginimas = 700;
var arPasikeite = false;
// UZDUOTIS
// A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
// atlyginimas = atlyginimas + 100;
atlyginimas += 100;
if (atlyginimas > 500) {
    console.log("atlyginimas padidejo");

} else {
    console.log("atlyginimas toks pats");
}
// 000000000000000
if (atlyginimas > 500) {
    arPasikeite=true;
    console.log("atlyginimas pasikeite");
}
if (arPasikeite) {

    console.log("atlyginimas padidejo");

} else {
    console.log("atlyginimas toks pats ar sumazejo");
}
// suprogramuoti kad isvestu zinute
// =======================================================================
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
for (var i = 0; i < array.length; i++) {
    array[i]
}

if (names=="Rico") {

}





// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
