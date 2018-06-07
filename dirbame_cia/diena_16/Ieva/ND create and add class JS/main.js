console.log("Labas ");


$('h1').hide(3000);





// $('h1').css('color', 'pink');

// ________________add_class_______________

// 2
// css faile apsirasyti klase "active":
// fono spalva: #b3b3b3; teksto storis: 700;

// 2.1
// su js sukurti menu naudojant <ul> <li> :
// Home, Gallery, About, contacts

document.querySelector('body').innerHTML+="<nav> <ul> </ul> </nav>";
document.querySelector('ul').innerHTML+="<li> Home </li>";
document.querySelector('ul').innerHTML+="<li> Gallery </li>";
document.querySelector('ul').innerHTML+="<li> About </li>";
document.querySelector('ul').innerHTML+="<li> Contacts </li>";

// 2.2
// suprogramuoti, kad paspaudus ant bet kurio menu punkto (li) jam uzsidetu klase "active

// 2.2.2 paspausti ant visu <li> elementu
//
// document.querySelector('li').classList.add("active");

// $('li').addClass('active'); // uzdeda klase ant visu li elementu
// $('li:eq(0)').addClass('active'); // uzdeda klase ant vieno konkretaus li elemento

// uzdeda klase tik ant paspausto elemento
// $('li').click(function(event) {
//   $(this).addClass('active');
//
// });





// patobulinti 2.2 koda, kad paspaudus ant metu <li> elemento, pries tai nuimtu "active klase nuo kilu <li> elementu:

// $('li').click(function(event) {
//   $('li').removeClass('active');
//   $(this).addClass('active');
//
// });



// 2.3.A  patikrinti, jeigu kalse "active" buvo uzdeta ant kitu  <li> pasalinti nuo visu menu "li" elementu klase "active"

// if ($('li').hasClass('active')){
//         $('li').removeClass('active');
//
// }


// 2.3.B  uzdeti klase "active" ant paspausto elemento

$('li').click(function(event) {
    $('li').removeClass('active');
    $(this).addClass('active');
});
