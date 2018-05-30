console.log("Labas ");


// $('h1').hide(3000);

$('h1').css("color", "pink");
$('h1').css("background-color", "#b2b2b2");

var manoH1css = {
    "font-size" : "120px",
    "font-weight" : "100",
    "border": "solid 1px red",
    "line-height": '220px'
};

$('h1').css( manoH1css );


$('li').last().css('color', 'blue');
$('li:last').css('font-size', '60px');

$('li:even').css('background-color', 'orange');

$('li').eq(2).css('color', 'pink');

// find - iesko viduje
$('body').find('h2').css('color', 'green');

// $('li[class="bg-info"]')
// $('li.bg-info')

$('h1').click(function(event) {

     $('body').css('color', 'white');
     $('body').css('background-color', 'black');

});
$('h1').on('mouseenter', function(event) {

     $('body').css('color', 'white');
     $('body').css('background-color', 'black');

});
$('h1').on('mouseleave', function(event) {

     $('body').css('color', 'black');
     $('body').css('background-color', 'white');

});


//
