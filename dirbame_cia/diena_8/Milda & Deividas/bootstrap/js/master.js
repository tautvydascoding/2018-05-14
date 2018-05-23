// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
console.log( " PRIES idedame i prieki: " + keliautojas);


keliautojas.unshift(  "1999/05/05"); //idedame i masyvo prieki
console.log( "idedame i prieki: " + keliautojas);



var ilgis = keliautojas.lenght; // 5
console.log("masyvo ilgis: " + ilgis)

keliautojas[ilgis] = "baige su pagyrimu";
keliautojas[  keliautojas.lenght  ] = 580;
console.log("po idejimo: " , keliautojas);
//console.log(names);

//i masyvo gala idedame
keliautojas.push("2018-05");
console.log("po idejimo i gala: ", keliautojas  );

keliautojas.pop(); // istrina paskutini masyvo elementa
console.log( "po istrynimo is galo:" , keliautojas);


keliautojas.shift(); // istrina is pacio priekio (ir paslenka, kad viskas butu nuo 0)

// masyva isveddam  i string su nurodytu skyrikliu

console.log(   keliautojas.join(" ; ")   );
console.log(   keliautojas.toString()    );  //pavercia i string



delete keliautojas[2]; //nesugadina tvarkos , istrina tik stalciau turini
console.log("po istrynimo DELETE2:  ",  keliautojas  );

//splice() - iterpti , istrinti
//slice() -  dalies kopija

var mas = [11, 22, 33, 44];

mas.splice(1,1);
console.log( mas );





//.length
//.join()
//.shift()
//.pop()



// =========================================================
// uzduotis  Array
//keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
