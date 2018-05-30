console.log("Labas ");


$('h1').hide(1000);


console.log("Labas ");

//uzduotis
//paspaudus ant h2 elemento jis turi isnykti

$('h2').click(function(event) {
    $('h2').hide(1000);
});


//tik ta kuri paspaudus
$('p').click(function(event) {
    $(this).hide(1000);
});

//su jq kai ant p uzvedi pelia pasikeicia spalva, o kai nuvedi vel pasikeicia

$('p').mouseenter(function(event) {
    $(this).css("color", "pink");
});
$('p').mouseleave(function(event) {
    $(this).css("color", "black");
});


$('h2').hover(function() {
    $(this).css("color", "pink");
}, function() {
    $(this).css("color", "black");
});


$('p').on('mouseleave', function(event) {
    $(this).css("color", "black");
});

//======call back===========
// var pranesimas = function() {
//     alert("darba atliktas");
// };
//
// //paleidimas
// $('body').hide(3000, pranesimas);


$('a').on('click', function () {
    $('p').last().css('color', 'red');
});




//pervadinam pirma straipsni


$('h2').eq(0).html("pakeiciau tave");


//paimti antro straipsnio tekstas

var x = $('p').eq(1).html();
console.log("anto straipsnio tekstas: " + x);



// $('h1').html("<b>Naujas tekstas</b>");
// $('h1').txt("<b>Naujas tekstas</b>");
//
// $('input').val("Naujas tekstas");//TIK ivedimo laukams
