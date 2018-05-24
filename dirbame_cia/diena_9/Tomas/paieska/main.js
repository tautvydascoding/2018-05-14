// // 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
 var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
//
// for (var i = 0; i < 50; i++) {
//
//
// if (names[i] == name) {
//     console.log("Radau Rico. Jo numeris:" + i);
//     break; // IDEA: sustabdo FOR cikla
//     }
// }
// ======================

var arRadau=false;

for (var i = 0; i < 50; i++) {
    // tikrinam ar vardas Rico

if (names[i] == "tomas") {
    arRadau=true;
    console.log("Radau Rico. Jo numeris:" + i);
break;
}
}
if (arRadau==false) {
    console.log("Nepavyko rast ...bandykite kita varda");
}



// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
