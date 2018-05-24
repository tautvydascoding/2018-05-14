console.log("Labas ");

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];

for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
    // console.log( " for " + i);
}
console.log(  masyvas );   //  [0, 0, 0, 0, 0, 0, 0, 0, ...


//================



// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var x = 0;
var m = [];
// ar tiesa?   (kol tiesa - tol dirbu)
while ( x < 50) {
    // console.log( " while " + x);  // ! pasitikrinti su console
    m[ x ] = 1;
    x++; // !!!!!  patikrinti ar salyga kazkada pakis
}
console.log(  m );   //   [1, 1, 1, 1, 1, 1, 1, ...


// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....


 // naudojame masyva ios ankstesnesuzduoties (uzpildyta vienetais "m" (50x ilgumo))
 var m = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

 for (var i = 1;    i < 12;    i = i + 2) {  // trumpiau  i += 2
     m[ i ] = 3;
 }
console.log( "pakeistas masyvas:", m );


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
