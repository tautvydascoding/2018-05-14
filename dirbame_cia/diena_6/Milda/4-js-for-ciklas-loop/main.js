console.log("Labas ");

// i++ tas pats kas i=i+1
for (var i = -5; i < 5;  i++) {
console.log("i yra:" , "azuolas" + i);
}

i  += 10;
i -=10;
i *=10;

// naudojant for cikla, atspausdinti "#" tiek, kad gautusi trikampio vaizdas

// #
// ##
// ###
// ####
// #####
// ######

var trikampis = "";
for (var i = 0; i < 6; i++) {
var trikampis = trikampis + "#";
console.log( trikampis );
}
