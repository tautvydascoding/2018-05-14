console.log("Labas ");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];





// var a = names.indexOf("Rico");
// console.log("Rico yra " + a);
//
//
// // ras visus
//
// for (var i = 0; i < 50; i++) {
//     if (names[i] == "Rico") {
//         console.log("radau Rico: " + i);
//
//     }
// }

//B)
var arYra = false; //dar neradau
for (var i = 0; i < names.length; i++) {
    //tikriname ar vardas Rico
    if (names[i] == "Rico") {
        arYra = true; //radau
        console.log("radau Rico: " + i);
        break; //sustabdo FOR cikla

    }
}

if (arYra == false) {
    console.log("Nepavyko rasti...Bandykite kita zodi");
}
