console.log("Labas ");

//uzduotis
//paspaudus ant h2 elemento jis turi isnykti

$('h2').click(function(event) {
    $('h2').hide(3000);
});


//tik ta kuri paspaudus
$('p').click(function(event) {
    $(this).hide(3000);
});
