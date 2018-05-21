console.log("Labas ");


// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//==========TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// document.write("  Mano tekstas 2 ");

// window.alert("labas");
// alert("Viso");
// x = 10 + 15;
// alert ( x );
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log( ivestasTekstas );
// document.write( "Jusu vardas: " + ivestasTekstas );
// var x = "Tomas";
// var y = "  Jurgauskas";
// var z = x + y;
// console.log( x + "Duomenys " + y  );  // Duomenys Tomas Jurgauskas

var x = document.querySelector('h1');  //querySelector- iekome <h1> elemento
console.log(  " h1: ", x );  // <h1> Antraste </h1>

// innerHTML - kintamasis, kuris saugo elemento viduje esanti teksta
document.querySelector('h1').innerHTML = " <b>Antraste3</b>";


// document.querySelector('.bg-info').innerHTML = " <b>Antraste</b>";
// document.querySelector('#logo').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:
