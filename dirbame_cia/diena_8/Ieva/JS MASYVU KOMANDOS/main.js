console.log("Labas ");

var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
keliautojas.unshift("1999-05-05");
console.log("Masyvas po pakeitimo su unshift:"+ keliautojas);


var ilgis = keliautojas.length;
console.log( "Masyvas po length:" + ilgis);

keliautojas[ilgis]="baige su pagyrimu";
keliautojas[ keliautojas.length]=580;
console.log(keliautojas);


console.log(keliautojas.join("?"));

keliautojas.push("2018-05-23");
console.log("po idejimo i gala", keliautojas);

keliautojas.pop();
console.log( "po pop:", keliautojas);

keliautojas.shift(); /// istrina is priekio pirma.

delete keliautojas[2];
console.log( "po istrynimo", keliautojas); ///istrina stalciaus turini, bet stalcius lieka, tuscias.



// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(keliautojas);

//.join()
//.shift()
//.pop()



// =========================================================
// uzduotis  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"


keliautojas.push("butelis vandens");
console.log("Masyvas su pakeitimu i gala:", keliautojas);

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("žiebtuvėlis");
console.log("Masyvas į pradžią įdėta:", keliautojas);

// 3. istrinti 3-cia elmenta

delete keliautojas[3];
console.log("Masyvas su tuščia trečia vieta:", keliautojas );


// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];
  for (i = 0; i < 50; i++){
      masyvas[i] = 0;
  }
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var x = 0;
var m = [];
    while (x < 50) {
      m[x] = 1;
      x++;
    }
console.log(m);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....




    for (var i = 1; i < 50; i+=2) {
      m[i] = 3;

    }
console.log(m);



// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


for (var i = 4; i < 50; i+=4) {
  m[i] = 9;
}
console.log("kas penktas elementas 9:", m);
