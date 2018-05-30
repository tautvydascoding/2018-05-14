console.log("Labas ");

$('h1').hide(3000);

// uzduotis 1
// paspaudus ant "h2" visi h2 isnyksta


$('h2').click(  function(event) {
    $('h2').hide(1000);
});
// uzduotis 2
// paspaudus ant "p" TIK PASPAUSTAS "p" isnykstu
$('p').click(  function(event) {
    $(this).hide(5000);
});

// su jq kai ant 'p' uzvedam lepe pasikeicia spalva, o kai nuvedam pasikeicia vel
$('p').mouseenter(function(event) {
    $(this).css("color", "pink");
});
$('p').mouseleave(function(event) {
    $(this).css("color", "black");
});

$('p').on('mouseleave', function(event) {
    $(this).css("color", "black");
});


// uzduotis===========call back=========
// suprogramuoti f-ja pranesimas(), kuris suveikia, kai scoll'ini arba kai paspaudi ant mygtuko

// var pranesimas = function() {
//     alert("Darbas atliktas");
// };
// // paleidimas
// $('body').hide(3000, pranesimas);

$('a').on('click', function() {
    $('p').last().css( "color", "red");
});


// PERVADINTI PIRMA-1 straipnsi
$('h2').eq(0).html(  "Pakeiciau tave" );
// $('h2')[0].html(  "Pakeiciau tave" );   // ERROR del .html(
// Paimti antro antro straipsnsio teksta
var x = $('h2').eq(1).html();
console.log( "antras straipsnio antraste:" + x );


//
