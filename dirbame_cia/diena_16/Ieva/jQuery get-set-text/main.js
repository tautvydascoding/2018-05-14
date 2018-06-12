console.log("Labas ");

// $('h1').hide(3000);

// $('h1').css('color', 'pink');
// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$('h1:eq(0)').html("Antraste nr.1");
$('h1:eq(1)').html("Antraste nr.2");
$('h1:eq(2)').html("Antraste nr.2");
//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

$('section h2').html("Pakeista antraštė");

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

var elm=$('li.reklama');
console.log(elm.text());

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

console.log($('li').text());

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)

$('li').eq(1).insertAfter($('li').eq(2));

//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)



// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'

$('form input').attr("value", "xxx");
document.getElementsByTagName('input')[0].value="Tomas";
document.getElementsByTagName('input')[1].value="a@a.lt";

// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)

$('h1, h2').css('color', "blue");

// A2) kas antra h2 pakeisti i raudona

$('h2:even').css("color", "red");

// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
$('li:last').css('color',"green");

// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}

$("li:not(.reklama)").css('color', "yellow");
