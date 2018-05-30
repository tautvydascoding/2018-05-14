console.log("Labas ");

$('h1').hide(3000);
//uzduotis: paspaudus ant h2 visi h2 isnyktu
$('h2').click( function(event) {
  $('h2').hide(1000);
});
//uzduotis2: paspaudus ant p TIK PASPAUSTAS isnyksta
$('p').click(function(event) {
  $(this).hide(1000);
});

//su jq kai ant p uzvedam pele pasikeicia spalva , o kai nuvedam pasikeicia vel
// $('p').mouseenter(function(event) {
//     $(this).css("color", "pink");
// });
//
//  $('p').mouseleave(function(event) {
//    $(this).css("color", "black");
//
// });

$('p').hover(function() {
  $(this).css("color", "pink");
}, function() {
  $(this).css("color", "black");
});

  //
  // var pranesimas = function() {
  //   alert("darbas atliktas");
  // };
  // //paleidimas
  // pranesimas();
  // $('body').hide(3000, pranesimas);


  $('a').on('click', function() {
    $('p').last().css("color","red");
  });

  //turinio idejimas i vidu
  // $('h1').html("<b>naujas tekstas</b>"); //naujas ryskus tekstas
  // $('h1').txt("<b>naujas tekstas</b>");
  //
  // $('input').val("naujas tekstas"); //!!!!!! TIK IVEDIMO LAUKAMS

  //PERVADINIMAS PIRMA STRAIPSNI
  $('h2').eq(0).html( "pakeiciau tave");
  //PAIMTI ANTRO STRAIPSNIO TEKSTA
  var x = $('h2').eq(1).html();
  console.log("antras straipsnio antraste: " + x);































  //
