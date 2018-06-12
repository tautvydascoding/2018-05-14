console.log("Labas ");


// $('h1').hide(3000);

// $('h1').css('color', 'pink');



//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
//
$('li').eq(1).insertAfter($('li').eq(2));

//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naudojant jQuery)

$("li.reklama").css('color', 'red');

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)

$('li').addClass('nav-item');

// B. pirmam "li" elementui uzddeti dar viena klase: "active"

$('li').eq(0).addClass('active');

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
$('input').val("xxx");

//  ivesti vardas: 'Tomas'
$('input').eq(0).val('Tomas');
//  ivesti pastas: 'a@a.lt'
$('input').eq(1).val('a@a.lt');
