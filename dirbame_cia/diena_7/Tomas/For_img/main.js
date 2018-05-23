var nuotrauka ="<img src='img/1.jpg' width='20%' alt='Eko technologiju Kompanijos zenklas'>";
for (var i = 0; i < 12; i++) {
    document.querySelector('body').innerHTML +=nuotrauka;
}

// piestiEilute(40);
// console.log("Vardas/ Pavarde/Amzius");
// piestiStulpeli(10);
function piestiEilute(ilgis) {
    var eilute="-";
    var ilgis = 40;
for (var i = 0; i < ilgis; i++) {
         eilute+="-";
}
document.querySelector('body').innerHTML +=eilute;
}
piestiEilute();
