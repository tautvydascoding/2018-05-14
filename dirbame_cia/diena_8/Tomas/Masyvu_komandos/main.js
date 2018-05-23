
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
keliautojas.unshift("1999/05/05");   // IDEA: idedame i masyvo prieki
console.log("idedameiprieki", keliautojas);

var ilgis = keliautojas.length;
console.log("masyvo ilgis:" + ilgis);

keliautojas[ilgis] = "Baige su pagyrimu";
keliautojas[keliautojas.length] = 650;
console.log("po idejimo:" , keliautojas);

// join isveda i STRINGA su nurodytu skyrikliu
console.log(keliautojas.join("/"));
keliautojas.push("2018-05");
console.log("po idejimo i gala:", keliautojas);

keliautojas.pop();
console.log("po istrynimo is galo:", keliautojas);

keliautojas.shift(); // istrina is pacio priekio (ir paslenka kad viskas butu nuo 0)

// delete keliautojas [2]; // istrina TIK stalcio turini

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


for (var i = 0; i < 50; i++) {    array[i]=0;
}
