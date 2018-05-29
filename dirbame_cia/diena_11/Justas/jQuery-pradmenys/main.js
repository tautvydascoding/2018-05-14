// console.log("Labas ");
//
//
// $('h1').show(4000);
//
//
//
//
//
$('h1').css('color', 'pink');
$('h1').css('background-color', 'green');


var manoH1css = {
    "font-size" : "120px",
    "font-weight" : "900",
    "border" : "solid 1px red",
    "line-height" : "240px"
};

$('h1').css(manoH1css);



$('li').last().css('color' , "blue");
$('li:last').css('font-size' , "60px");

$('li:even').css('background-color' , 'orange');

$('li').eq(3).css('color' , 'pink');

//iesko viduje
$('body').find('h2').css('color', 'green');


// $('li[.="bg-info"]');

$('h1').click(function(event) {
    $('body').css('color' , 'white');
    $('body').css('background-color' , 'black');
});
