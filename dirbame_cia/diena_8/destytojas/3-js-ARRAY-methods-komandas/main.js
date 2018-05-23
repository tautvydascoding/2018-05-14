console.log("Labas ");


// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
 var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log( "PRIES idejima:" ,  keliautojas  );
keliautojas.unshift(  "1999/05/05" ); // idedame imasyvo prieki
console.log( "idedame i prieki:" ,  keliautojas  );

var ilgis = keliautojas.length; // 5
console.log("masyvo ilgis:" + ilgis);


//  logis triukas
keliautojas[ilgis] = "baige su pagyrimu";
keliautojas[   keliautojas.length    ] = 580;
console.log( "po idejimo:" ,  keliautojas  );


keliautojas.push("2018-05");    // i masyvo gala idedame
console.log( " po idejimo i gala:" ,    keliautojas   );

keliautojas.pop();    // istrintit paskutinta masyvo elementa
console.log( " po istrynimo is galo:" ,    keliautojas   );

keliautojas.shift();  // istrina is pacio priekio (ir paslenka kad viskas butu nuo 0)

// masyva isvedas i STRING su nurodytu skyrikliu
console.log(   keliautojas.join(" ;  ")    );
console.log(   keliautojas.toString()    );    // pavercia i String


delete keliautojas[2];  // nesugadina tvarkos, istrina tik stalciaus turini
console.log( " po istrynimo DELETE 2:" ,    keliautojas   );

splice()   - iterpit, istrinit
slice()  - dalies kopija



// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
// keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

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
