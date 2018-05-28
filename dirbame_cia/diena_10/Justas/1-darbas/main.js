// console.log("Labas ");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// function  getStalciausNumeris(xxx) {
//     var arYra = false; //dar neradau
//     for (var i = 0; i < names.length; i++) {
//         //tikriname ar vardas Rico
//         if (names[i] == xxx) {
//             arYra = true; //radau
//             return i; //nutraukia ne tik cikla bet ir visa funkcija
//
//         }
//     }
//
//     if (arYra == false) {
//         return -1;
//         // return null;
//     }
// }
// var numeris = getStalciausNumeris("Tenafgd");
// if (numeris >= 0) {
// console.log("ieskomas zmogaus numeris: " + numeris);
// } else {
//     console.log("ieskomo zmogaus nera");
// }
// arba
// console.log(getStalciausNumeris("Tenagfhd"));



// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

//3)

// var zmogausNr = names.indexOf("Piper");//iesko pirmo stalciaus su sia fraze
// var pavardeYra = lastNames[zmogausNr]; //pasiima zmogaus numeri ir iesko masyve pagal ta numeri stalciaus
// console.log("pavarde yra: " + pavardeYra);

//4)


// var rastosPavardes = [];
// var ieskomasVardas = "Rico";
// for (var i = 0; i < names.length; i++) {
//     //tikrinu ar stalciuje stalcius
//     if (names[i] == ieskomasVardas) {
//         console.log("zmogaus pavarde: " + lastNames[i]);
//         rastosPavardes.push(lastNames[i]);
//     }
// }
// console.log("visos rastos pavardes: ", rastosPavardes);


//5)

ieskomiNr = [2, 16, 17, 18, 19, 25];

for (var i = 0; i < ieskomiNr.length; i++) {
    var x = ieskomiNr[i];
    console.log("ieskomo zmogaus nr: " + x);
    console.log("vardas: " + names[x]);
    console.log("pavarde: " + lastNames[x]);
}
