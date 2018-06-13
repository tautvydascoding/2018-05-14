console.log("Labas ");


// blog'o <p> elementų teksto spalvos kitimas
$('.blog').mouseenter(function(event) {
  $(this).css("color", "green");

});
$('.blog').mouseleave(function(event) {
  $(this).css("color", "black");
});



// blog'o antraščių <h2> teksto spalvos keitimas
$('.blogH2').mouseenter(function(event) {
  $(this).css("color", "green");

});
$('.blogH2').mouseleave(function(event) {
  $(this).css("color", "black");
});


// menu punktų nav-bar teksto spalvų keitimas
$('.nav-link').mouseenter(function(event) {
  $(this).css("color", "green");

});
$('.nav-link').mouseleave(function(event) {
  $(this).css("color", "rgba(255,255,255,.5)");
});



//contact page tekstų spalvų keitimas (<p>, <h2>)
$('.textContact').mouseenter(function(event) {
  $(this).css("color", "green");

});
$('.textContact').mouseleave(function(event) {
  $(this).css("color", "black");
});


//front page'o tekstų (trijų blokų) spalvų keitimas
$('.heading').mouseenter(function(event) {
  $(this).css("color", "green");

});

$('.heading').mouseleave(function(event) {
  $(this).css("color", "black");
});



// karuselės tekstų spalvų keitimas
$('.carousel-caption p').mouseenter(function(event) {
  $(this).css("color", "rgb(218, 227, 217)");

});

$('.carousel-caption p').mouseleave(function(event) {
  $(this).css("color", "white");
});

$('.carousel-caption h5').mouseenter(function(event) {
  $(this).css("color", "rgb(218, 227, 217)");

});

$('.carousel-caption h5').mouseleave(function(event) {
  $(this).css("color", "white");
});
