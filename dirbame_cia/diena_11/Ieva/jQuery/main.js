console.log("Labas ");


//$('h1').hide(3000);





// // $('h1').css('color', 'pink');
//
// // $( "h1" ).css( "background", "black" );
// $( "h1" ).css().add( "h2" ).css( "background", "yellow" );
//
// var manoH1css = {
//   "font-size" : "100px",
//   "font-weight": "400",
//   "border":"solid 1px red",
//   "line-height" : "220px"
//
// };
// $('h1').css(manoH1css);

// kuriamas objektas JS ir iššaukiamas per $ ženklą.


$('li').last().css('color', 'blue');
$('li:last').css('font-size', '60px');

$('li:even').css('background-color', 'yellow');

$('li').eq(2).css('color', 'pink');

$('body').find('h2').css('color', 'green');
