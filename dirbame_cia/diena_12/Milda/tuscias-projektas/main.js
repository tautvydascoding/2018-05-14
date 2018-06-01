// uzduotis

// paspaudus ant h2 elemento visi h2 isnyksta
$('h2').click(function(event) {
  $('h2').hide(1000);
});
// 2 uzduotis
// paspaudus ant p, ji isnyktu
$('p').click(function(event) {
  $(this).hide(1000);
});

// su jquery, kai ant p uzvedam pele pakeicia spalva, o  kai nuvedam vel pakeicia

$('p').mouseenter(function(event) {
  $(this).css("color", "pink");
});

$('p').mouseleave(function(event) {
$(this).css("color", "black");
});

// var pranesimas = function() {
//   alert("Darbas atliktas");
// };


// paleidimas
// $('body').hide(3000, pranesimas);

// uzduotis suprogramuoti funkcija, pranesima, kuris suveikia, kai skrolini arba kai paspaudi ant mygtuko

$('a').on('click', function() {
    $('p').last().css("color", "red");
 });

// pervedimas i 1-a straipsni
$('h2').eq(0).html("pakeiciu tave");
// $('h2')[0].html("pakeiciu tave"); //error del html
//paimti antro straipsnio tekstas
var x = $('h2').eq(1).html();
console.log("antra straipsnio antraste:" + x);
