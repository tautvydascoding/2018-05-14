console.log("Labas ");
//$('h1').hide(6000);
$('h1').css("background-color", "#b2b2b2");

var manoH1css = {
  "font-size" : "120px",
  "font-weight" : "100",
  "border" : "solid 1px red",
  "line-height" : "220px"
};

$('h1').css( manoH1css );

$('li').last().css('color','blue');
// reiskia ta pati komandos
$('li:last').css('font-size','60px');

$('li:even').css("background-color", "orange");

$('li').eq(2).css("color","yellow");

//find - iesko viduje
$('body').find("h2").css("color","green");

$("h1").click(function(event) {
  $('body').css('color', 'white');
  $('body').css('background-color', 'black');
});
