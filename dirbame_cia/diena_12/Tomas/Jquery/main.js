console.log("Labas ");

// Paspaudus ant h2 elemento jis isnyksta
$('h2').click(function(){
    $(this).hide(1000);
});
//

$('p').click(function(event){
    $(this).hide(1000);
});

// su jq kai uzvedam pele ant p uzvedam lape pasikeicia spalva

$('p').
    mouseenter(function(event){
    $(this).css("color", "black");
});
$('p').
    mouseleave(function(event){
    $(this).css("color", "pink");
});

var pranesimas=function(){
    alert("Darbas atliktas");
};
// suprogramuot funkcija pranesimas(, kuris suveikia, kai skrolini ar kai paspaudi ant mygtuko)
// $('body').hide(3000, pranesimas);

$('a').on('click', function(){
$('p').last().css("color", "red");
});

// PERVEDIMAS pirma-1 straipsni
$('h2').eq(0).html("pakeiciu tave");
var x=$('h2').eq(1).html();
console.log("antras straipsnio antraste:" + x);


// $('h1').css('color', 'pink');
