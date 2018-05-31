console.log("Labas ");


$('li').addClass(function(index){
  return "spec-" + index;
}); // prideda skaicius ir numeruoja is eiles

var nuotraukasVardas = "0";
$("li").on("mouseenter", function(){
    $("img").attr("src", "img/" + nuotraukosVardas + ".jpg");
    nuotraukasVardas++;
}) // isveda nuotraukas i index.php bet rodo tik po viena nuotrauka ir siuncia tik po viena

$("li").attr("alt", "meska sedi kaleime");

var x = $("#logo").attr("id");
var y = $("#logo").attr("tautvydas");
alter(x + y);


// $('h1').css('color', 'pink');
