console.log("Labas ");

var nuotrauka = "<img src='img/squash.jpg' alt='squash'>";
console.log(nuotrauka);

for (var i = 0; i < 12 ; i++) {
  document.write(nuotrauka);
}

// piestiEilute(40);
// console.log(" vardas | pavarde | amzius");
// piestiEilute(40);
// piestiStulpeli(10);



function piestiEilute(ilgis){
  var eilute = "-";
  for (var i = 0; i < ilgis; i++) {
   eilute = eilute + "-";
  }
  console.log(eilute);
}

piestiEilute(30);
console.log(" vardas | pavarde | amzius");
piestiEilute(30);
