



// =========================================================
// uzduotis  Array
//keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

//var masyvas = [];
//for (var i = 0; i < 50 ; i++) {
//    masyvas[i] = 0;
//}

//console.log(  masyvas  );







// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;


var x = 0;
var m = []
//ar tiesa ? (kol tiesa - tol dirbsiu)
while (x < 50 ) {
    //!!!!!!!!!! patikrinti ar  kada nors pakis !!!!!!! nes sprogs kompas

    //console.log("while" + x); // pasitikrinti su console

    m[ x ] = 1;


    x++;        //!!!!!!!!!! patikrinti ar  kada nors pakis !!!!!!! nes sprogs kompas
}

console.log( m );



// 5.2: kas antra ^ masyvo elementa pakeisti i "3"

//naudojame masyva uzpildyta vienetais "m" (50x ilgumo)

for (var i = 1; i < 50; i = i + 2 ) {
  m[ i ] = 3;
   

}
console.log("pakeistas masyvas:", m);

// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....







// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)========
