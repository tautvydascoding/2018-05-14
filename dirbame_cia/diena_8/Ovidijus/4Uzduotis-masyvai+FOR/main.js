console.log("Labas ");

var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(keliautojas);

keliautojas.push("butelis vandens");
console.log(keliautojas);

keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);

keliautojas.splice(2,1);
console.log(keliautojas);

var masyvas = [];
for (var i = 0; i < 50; i++) {
  masyvas[i] = 0;
  // console.log("for " + i );
}
console.log(masyvas);

// /////////////////while//////////////
// ar tiesa? (kol tiesa - tol dirba)

var x = 0;
var m = [];

while(x < 50){
  // console.log("while" + x);
  m[x] = 1; /// m.push( 1 );
  x++; // !!!!!! patikrinti ar salyga baigtine
}
console.log("While masyvas: " + m );

// ////////////

for (var i = 1; i < 50 ; i= i + 2) {
  m[i] = 3;
}
console.log(m);

// ///////////////////

for (var i = 4; i < 50 ; i += 5) {
  m[i] = 9;
}
console.log(m);
