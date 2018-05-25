console.log("Labas ");
 var raides = ["a", "b", "c", "d", "e"];

console.log(raides.join(" ?"));

raides.pop();
console.log("kas vyksta:", raides);

raides.splice(1,3);
console.log("naidojame splice komanda", raides);

//pridekime i masyva elementu kas antra
for (var i = 1; i < 7; i+= 2 ) {
  raides[i] = "f";
}
console.log("ar pasikeite masyvas:", raides);


console.log("naudojame slice kom", raides.slice(1,4));

//sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyv1 = [""];
for (var i = 0; i < 50; i++) {
  masyv1[i] = "0";
}
console.log("spaudinama:", masyv1);

var x = 0;
var m = [];
while (x < 50) {
  m[x] = 1;
  x++;
}
console.log(m);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
var sk1 = 3;
for (var i = 1; i < m.length; i = i + 2) {
  m[i] = sk1;
}
console.log(m);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
var sk2 = 9;
for (var i = 4; i < m.length; i+= 5) {
  m[i] = sk2;
}
console.log(m);


// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis

var vardai=["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];

// ) sunaikinti pirma STALCIU VISA
vardai.shift();
console.log(vardai);

// ) tarp Petras ir Povilas, iterpti Marija
vardai.splice(1,0,"Maryja");
console.log(vardai);
// ) sukeisti vietomis pirma ir paskutini stalciu
var temp = vardai[4];
vardai[4] = vardai[0];
vardai[0] = temp;
console.log("sukeista pirma ir paskutine vietos:", vardai);

// ) sukurti masyvo kojipa
// ) kopijos masyve istrinti nuo 2 iki 4
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
// ) prijungti kopijos masyva prie orginalo masyvos galo
vardai2 = vardai.slice(0);
console.log("nukopijuotas masyvas:", vardai2);

vardai2.splice(2,2);
console.log(vardai2);
console.log(vardai);

// vardai.push(vardai2);
// console.log("prisjungti vardai prie vardai2", vardai);
//arba
var bendriVardai = vardai.concat(vardai2);
console.log(bendriVardai);

// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]

var keliones = ["Ryga", "Vilnius", "Siauliai"];
var zmones = ["Kestas", "Jonas", "Zygints"];
var bendras = [];
for (var i = 0; i < 3; i++) {
  bendras.push(keliones[i]);
  bendras.push(zmones[i]);
}
//   if (i % 2 == 0) { bendras[i] = keliones[i];
//   } else { bendras[i] = zmones[i];
//       }
// }
console.log( bendras);
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"
var temp = "";
var prekzenklai = ["mars", "snikers", "milky", "kitkat", "bingo"];
var j = prekzenklai.length - 1;
for (var i = 0  ; i < (prekzenklai.length/2); i++,  j--) {
  temp = prekzenklai[i];
  prekzenklai[i] = prekzenklai[j];
  prekzenklai[j] = temp;


}
console.log(prekzenklai);


// var temp2 = "";
// var  temp3 = prekzenklai[prekzenklai.length -1];
// for (var i = 0; i < prekzenklai.length/2; i++) {
//   temp2 = prekzenklai[i];
//   prekzenklai[i] = temp3;
//   temp3 = temp2;
// }
//
// console.log(prekzenklai);
// blogai
