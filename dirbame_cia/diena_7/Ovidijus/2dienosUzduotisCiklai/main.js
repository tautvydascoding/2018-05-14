console.log("Labas ");

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

for (var i = 0; i < 50; i++) {
  console.log("Azuolas"+ i);
}

document.querySelector('h3').innerHTML = "Azuolas<div>";

// var para = document.createElement("article");
for (var i = 0; i < 50; i++){
  document.querySelector('h2').innerHTML += "<article><h2>Azuolas</h2></article>";
}

function printX(x){
document.write(x);
}
printX("Tomas<div>");

for (var i = 0; i < 50; i++) {
  console.log(printX("Tomas<div>"));
}
