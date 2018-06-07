$('<h2>ANtraste</h2>'); // nera DOM'e
$("header").html('<h2>ANtraste</h2>'); //  i DOM elementa "header" sukursime '<h2>ANtraste</h2>'
$("footer p").eq(2).html(); // paimsim issirinkto "p" teksta
$("footer p")[2];           // paimsim issirinkto "p" DOM elementa !!bet neveiks ant jo jQuery komandos
$("footer p")[2].html();     // ERRRO, nes [] grazina paprasta elementa
$("footer p").html();       // paimsim PIRMO!! "p" teksta

document.querySelector('footer p');       // surandame PIRMA!!! 'p'
document.querySelectorAll('footer p')[2]; // surandame  issirinkta 'p'
document.querySelectorAll('footer p')[2].html(); // ERROR,  nes [] grazina paprasta elementa - o jie neturi jQuery komandu
