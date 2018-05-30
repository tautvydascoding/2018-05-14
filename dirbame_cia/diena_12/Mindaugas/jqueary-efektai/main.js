console.log("Labas ");

//paskaudus ant h2 elemento jis isnyktu
$('h2').click( function(event) {
  $('h2').hide(1000);
});

//pasaudus ant "h2"  TIK PASAUstas isnykty
$('p').click( function(event) {
  $(this).hide(1000);
});

//kai p nuvedam pele, pasikeiciam spalva
$('p').mouseenter(function(event) {
  $(this).css("color", "pink");
});
//mouseleave
$('p').mouseleave(function(event) {
  $(this).css("color", "black");
});

var pranesimas = function(){
  alert("Darbas atliktas");
};
//suprogramuoti funkcija
$('body').hide(30000, pranesimas);

$('a').on('click', function() {
  $('p').last().css("color", "red");
});

//pervadineme pirma-1 straipsin
$('h2').eq(0).html( "Pakeiciau tave"); //eq, pakeicia tam tikra elementa, dabar pirmaji
// $('h2')(0).html( "Pakeiciau tave"); klaida

//paimti antro straipsio tesksta
 var x = $('h2').eq(1).html(); //jei tuscias, tai ima elementa
console.log("antro straipsio antraste:" + x);
