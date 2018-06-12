console.log("Labas ");


// $('h1').hide(3000);
// $('h1').css('color', 'pink');

// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery

// 1.1  sukurti:
// <section>
// <h1>  Tekstas </h1>
// </section>

document.querySelector('body').innerHTML+="<section> <h2> Tekstas </h2> </section>";



//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)

$('h2').addClass("bg-info mt-5 aukstis-200");



// 1.3  nuo h1 pasalinti mt-5 klase

$('h2').removeClass('mt-5');

// 1.4  paleisti komanda   toggleClass( 'aukstis-200')  -

$('h2').toggleClass('aukstis-200');

// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')

$('h2').toggleClass('aukstis-200');

// KAS pasikeite?

// 2. Patikrinti ar h1 turi klase 'bg-info':
//
if ($('h2').is('.bg-info')){
    $('h2').removeClass('bg-info');
    $('h2').addClass('bg-danger');
  } else {
    $('h2').addClass('bg-success');
  }


// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"


// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500


if ($('section').is('.aukstis-200')){
    $('section').addClass('aukstis-500');
} else {
  $('section').addClass('aukstis-500');
}
