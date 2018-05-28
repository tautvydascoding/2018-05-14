console.log("Labas ");


// $('h1').hide(3000);


$('h1').css('color', 'pink');
$('h1').css('background-color', 'green');

var manoH1css = {
  "font-size" : "120px",
  "font-weigth" : "100",
  "border" : "solid 1px red",
  "line-height" : "160px"
};
$("h1").css(manoH1css);


$("li").last().css("color, blue");
$("li:last").css("font-size", "60px");

$("li:even").css("background-color", "orange");

$("li").eq(2).css("color", "pink");

$("body").find("h2").css("color", "green");
