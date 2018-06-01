console.log("Labas ");


$('li').addClass( function(index) {
    return "spec-" + index;
} );

$('li').attr("alt", "Meska sedinti miske");

var nuotruakosVardas = '0';
$('li').on('mouseenter', function(){
    $('img').attr('src', 'img/' + nuotruakosVardas + ".jpg");
    nuotruakosVardas++;
}) ;

//atributo paemimas
var x = $('#logo').attr("id");
var y = $('#logo').attr("tautvydas");
alert( x + y );
 

// $('h1').css('color', 'pink');
