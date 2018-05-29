console.log("Labas ");


$('h1').css("color", "hotpink");
$('h1').css("background-color", "gold");

var manoH1css = {
    "font-size" : "120px",
    "font-weight" : "100",
    "border"    :  "solid 3px red",
    "line-height" : "220px",
"text-shadow" : "3px 3px 6px black"
};
$("h1").css(manoH1css);


// $('h1').css('color', 'pink');

$("li").last().css("color", 'blue');
$('li:last').css('font-size', '60px');
$('li:even').css('background-color', 'orange');

$('li').eq(2).css('color', 'pink');
// find-iesko vidije
$('body').find('h2').css('color', 'green');

$('h1').click(function (event) {
    $('body').css('color', 'white');
    $('body').css('background-color', 'black');
});
