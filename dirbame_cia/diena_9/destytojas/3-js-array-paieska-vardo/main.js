console.log("Labas ");

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti 1A) : jeigu tokio vardo neranda, isvesti VIENĄ pranesima
// "Nepavyko rasti...Bandykite kita zodi"
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

// 0, 1   ,2 , 3, 4 ... 50
// begsime
// for (var i = 0; i < 50; i++) {
//     // tikriname ar vardas yra Rico
//     if (  names[i]   ==  "Rico"   ) {
//         console.log(" Radau Rico. Jo numeris: " +  i );
//         break; // sustabdo FOR cikla
//     }
// }
// B)========
var arRadau = false;  // dar neradau

for (var i = 0; i < names.length; i++) {
    // tikriname ar vardas yra Rico
    if (  names[i]   ==  "Rico"   ) {
        arRadau = true;  // radau
        console.log(" Radau Rico. Jo numeris: " +  i );
        break; // sustabdo FOR cikla
    }
}
if (arRadau == false) {
    console.log("Nepavyko rasti...Bandykite kita zodi");
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(xxx) {
        var arRadau = false;  // dar neradau

        for (var i = 0; i < names.length; i++) {
            // tikriname ar vardas yra Rico
            if (  names[i]   ==  xxx   ) {
                arRadau = true;  // radau
                return i; // nutraukia ne tik cikla, bet visa f-ja
            }
        }
        if (arRadau == false) {
             return -1;
             //return null;  // sitas niekad neivyks, nes sutikus " return -1;" f-ja nutrauks darba
        }
}
var nr = getStalciausNumeris('Rico');
if (nr >= 0) {
    console.log( "iskomo zmogaus numeris: " + nr );
} else {
    console.log( "ieskomo zmogaus NERADOME");
}
// arba
// console.log(   getStalciausNumeris('Treva')   );
