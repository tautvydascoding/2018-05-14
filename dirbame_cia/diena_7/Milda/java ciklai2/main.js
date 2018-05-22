//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
for (var i = 0; i < 50; i++) {
  console.log("Azuolas"+ i);
}

// 1.1 UZDUOTIS
    // isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

document.write('h3');
// .innerHTML="<h3> Azuolas </h3>";

document.querySelector('body').innerHTML+="<h3> Azuolas </h3>";

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
for (var i = 0; i < 50; i++) {
  document.querySelector('article').innerHTML+="<h2> Azuolas </h2>";
}

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa atspausdins paduota xx teksta(panaudojanti document.write arba innerHTML)
 function printX(duomenys) {

 }

document.querySelector('body').innerHTML+="<h2> duomenys </h2>"



document.querySelector('bg-info').innerHTML+="<h2> Azuolas </h2>";


document.write("<article> </article>");


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (var i = 0; i < 30; i++) {
  printX ("tekstas su for ciklu <br>");
}
