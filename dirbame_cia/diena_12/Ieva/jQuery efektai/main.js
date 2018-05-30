console.log("Labas ");

//
// $('h1').hide(3000);





// $('h1').css('color', 'pink');


//paspaudus ant H2, jis isnyksta//

$('h2').click(function(event){
    $('h2').hide(1000);

});

//paspaudus tik tam tikra p elementa paslepia//

$('p').click(function(event){
    $(this).hide(1000);

});

//kai ant paragrafo uzvesime pele, pasikeicia spalva//


// $('p').mouseenter(function(event) {
//   $(this).css("color", "pink");
// });
// $('p').mouseleave(function(event) {
//   $(this).css("color", "black");
// });

$('p').hover(function() {
  $(this).css("color", "pink");
}, function() {
$(this).css("color", "black");
});

// var pranesimas = function() {
//   alert("Darbas atliktas");
// };
//
// /// kai uzvedame ant mygtuko
//
// $('body').hide(3000, pranesimas);


$('a').on('click', function() {
  $('p').last().css('color', 'red');
});

//pervadiname  h2

$('h2').eq(1).html("Pakeiciau");

// paimti antra straipsnio teksta
var x = $('h2').eq(1).html();
console.log("antras straipsnio antraste:" + x);
