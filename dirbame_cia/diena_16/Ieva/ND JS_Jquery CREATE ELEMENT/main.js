console.log("Labas ");

//
// $('h1').hide(3000);
console.log("Labas222 ");


// $('h1').hide(3000);

// $('h1').css('color', 'pink');


// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
// pasitikrinti su console

var manoBody = document.querySelector('body');
var manoImage = document.createElement("img");
var manoImage2 = document.createElement("img");
manoBody.appendChild(manoImage, manoImage2);


// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body

var manoHeaderis = document.createElement('header');
var manoFooteris = document.createElement('footer');


manoBody.appendChild(manoHeaderis);
manoBody.appendChild(manoFooteris);


// 1.2
// i <header> ir <footer> ideti <img> elementa

manoHeaderis.appendChild(manoImage);
manoFooteris.appendChild(manoImage2);


console.log("mano hederis:", manoHeaderis);
console.log("mano futeris: ", manoFooteris);

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px



// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

manoImage.classList.add("logo");

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
var manoMain = document.createElement('main');
manoBody.appendChild(manoMain);

var manoText = document.createTextNode("Tekstas main elemente");
manoMain.appendChild(manoText);

document.body.insertBefore(manoMain, manoFooteris);
console.log(manoMain);
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)

var manoArticle = document.createElement('article');
manoMain.appendChild(manoArticle);

var manoH2 = document.createElement('h2');
var manoTekstasH2=document.createTextNode("Antraste h2");
manoArticle.appendChild(manoH2);
manoH2.appendChild(manoTekstasH2);

var manoP=document.createElement('p');
manoArticle.appendChild(manoP);
    var manoTekstasp=document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
    manoP.appendChild(manoTekstasp);



// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGOTIPA i kita vieta naudojant js
// A) perkelti i footer
// B) perkelti i article ( tarp h2 ir p)




// ---------------------------------
// 1.9 daugiau uzduociu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//
