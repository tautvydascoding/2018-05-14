console.log("Labas ");

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

// i += 10; //i = i + 10;
// i -= 10; //i = i - 10;

// for (var i = 0; i < 5; i++) { //i++ tas pats kas i = i + 1
//     console.log("i yra: " + "gfdhf" + i);
// }
var trikampis = "";
for (var i = 0; i < 6; i++) {
    trikampis = "#" + trikampis;
    console.log(trikampis);
}
