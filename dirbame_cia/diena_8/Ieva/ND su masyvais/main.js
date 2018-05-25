console.log("Labas ");

// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis

var vardai=["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];

console.log("Vardų masyvas:", vardai);

// ) sunaikinti pirma STALCIU VISA

vardai.shift(0);
console.log("Ištryniau pirmą stalčių:", vardai);


// ) tarp Petras ir Povilas, iterpti Marija
vardai.splice(1, 0, "Marija");
console.log("Įterpiau Mariją tarp Petro ir Povilo:", vardai);

// ) surikiuoti Masyvai


// ) sunaikinti Marijos stalciu
delete vardai[1];
console.log("Ištrinti marijos stalčių:", vardai);

vardai.splice(1,1);
console.log("ištryniau marijos vietą su splice:", vardai);

// ) sukeisti vietomis pirma ir paskutini stalciu
vardai.sort(); // nerikiuoja skaičių
console.log("sukeiciau pirma su paskutiniu:", vardai);

// ) sukurti masyvo kojipa
// ) kopijos masyve istrinti nuo 2 iki 4
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
// ) prijungti kopijos masyva prie orginalo masyvos galo



// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]

// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"
