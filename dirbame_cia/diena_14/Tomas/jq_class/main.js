console.log("Labas ");


$('li').addClass(function(index){
    return "spec-" + index;
});

// $('li').attr("atributovardas", "atributo reiksme");
$('li').on('mouseenter', function() {
    $('img').attr('src', 'img/' + imgVardas + ".jpg");
});
// atributo paemimas

x = $('#logo').attr("id");
alert(x);
