//Juodina
$(".tx").mouseenter(function(event) {
  $(this).css("color", "black");
  $(this).css("font-size", "25px");
});
$(".tx").mouseleave(function(event) {
  $(this).css("color", "grey");
  $(this).css("font-size", "20px");
});

//Raudonina
$(".rd").mouseenter(function(event) {
  $(this).css("color", "black");
  $(this).css("font-size", "30px");
});
$(".rd").mouseleave(function(event) {
  $(this).css("color", "red");
  $(this).css("font-size", "20px");
});

//Zalina
$(".btnsz").mouseenter(function(event) {
  $(this).css("color", "green");
  $(this).css("font-size", "30px");
});
$(".btnsz").mouseleave(function(event) {
  $(this).css("color", "white");
  $(this).css("font-size", "10px");
});
