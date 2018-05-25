console.log("Labas ");

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

// var zmogausNR = getStalciausNumeris("Freida");
var zmogausNR = names.indexOf( "Piper" ); // grazina stalciaus numeri ('index'),
// kuriam ideta ieskoma fraze: "Freida"

var ieskomaPavarde =   lastNames[   zmogausNR   ];
console.log(   "ieskoma Pavarde:  " + ieskomaPavarde   );

// 4) rasti visu zmoniu vardu "Rico" pavardes

    var rastosPavardes = [];

    // ieskom visu Rico
    for (var i = 0; i < names.length; i++) {
        // tikrinu ar stalciuje Rico
        if ( names[i] == "Rico" ) {
            console.log(  "Rico pavarde: ",   lastNames[i]  );
            rastosPavardes.push(      lastNames[i]     );
        }
    }

    console.log(" Visos rastos pavardes: ",  rastosPavardes);

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
//  isvesti ju pavardes ir vardus

ieskomiNR = [2, 16, 17, 18, 19, 25];

for (var i = 0; i < ieskomiNR.length; i++) {
    //A) atspausdinti visus numerius
    var x = ieskomiNR[i];
    // console.log(  "ieskomo zmogaus numeris: " + x   );

    // B)
    // Enriqueta", "Sybil", "Piper", "Anh", "Carmelo"
    // console.log("vardas: " +  names[ i ]);

    console.log("vardas: " +  names[ x ]);
    console.log("pavardes: " +  lastNames[ x ]);
}




//
