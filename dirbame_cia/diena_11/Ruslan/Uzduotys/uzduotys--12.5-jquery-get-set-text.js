
// console.log ("JAJA");
var text = "";
var heading1 = document.querySelectorAll("h1");

 $(document).ready(function(){                 //UZDUOTIS 1
    // console.log(heading1);
    for (i=0;i<heading1.length;i++){
        textas = "Antraste nr: " + i;
     $(heading1[i]).text(textas);
    };

    $("section h2").text("Pakeista antraste"); //UZDUOTIS 2
    console.log($("li.reklama").text());    // UZDUOTIS 3
    $("li").each(function(){                // UZDUOTIS 4
        console.log($(this).text());
    });

});


// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)


//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
;

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta



// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


//------ atributes--------------------------
// UZDUOTIS 6
// surasti li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
// </body>