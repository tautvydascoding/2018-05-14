console.log("Labas ");

// $('h1').hide(3000);

// $('h1').css('color', 'pink');


// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery

var manoBody=document.querySelector('body');
var manoSection=document.createElement('section');

manoBody.appendChild(manoSection);

var manoDiv = document.createElement('div');
manoSection.appendChild(manoDiv);

$('div').append("<h2>ANTRAŠTĖ 2</h2>");

$('h2').addClass("reklama");

$('div').append("<h3>ANTRAŠTĖ 3</h3>");
$('div').append("<h4>ANTRAŠTĖ 4</h4>");
$('div').append("<h5>ANTRAŠTĖ 5</h5>");

manoArticle=document.createElement('article');
manoBody.appendChild(manoArticle);

manoNav = document.createElement('nav');
manoArticle.appendChild(manoNav);

manoTekstas=document.createTextNode("Tekstas");
manoNav.appendChild(manoTekstas);




// UZDUOTIS  -------  pasikartojimas testui-----
// html faile
// <section>
//     <div>
//         <h2>  1 Antraste </h2>
//     </div>
//
//     <h2 class='reklama'>  2 Antraste </h2>
//     <h3>  3 Antraste </h3>
//     <h4>  4 Antraste </h4>
//     <h5>  5 Antraste </h5>
// </section>
//
// <article>
//     <nav> Tekstas </nav>
// </article>

// UZDUOTIS
// 1.0
// kaip perkelti elementa 'h3' po 'h4'



// 1.1
// kaip perkelti klase 'reklama' virs 'section'


// 1.2
// kaip perkelti 'h3' po 'div'

$('div').after($('h3'));


// 1.3
// kaip perkelti 'h4' i  'nav' vidu

$('nav').append($('h4'));

// 1.4
// kaip perkelti 'h5'  virs  'article'

$('article').before($('h5'));

// 1.5
// kaip perkelti 'section'  po  'article'

$('article').after($('section'));



//
