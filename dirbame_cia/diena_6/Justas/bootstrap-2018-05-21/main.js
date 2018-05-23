
var manoArray = new Array();
manoArray[0] = 21;
manoArray[1] = "labiuks";

var manoMasina = new Object();
manoMasina.maxSpeed = 100;
manoMasina.vairuotojas = "Justas";

manoMasina.vairuoja = function() {
    console.log("dabar vairuoja " + manoMasina.vairuotojas);
};
manoMasina.vairuoja();

var manoMasina2 = {
    maxGreitis: 50,
    vairuotojas: "Justas",
    vairuoja: function(greitis, laikas) {
        console.log(greitis * laikas);
    }
};

    console.log(manoMasina2.maxGreitis);
    manoMasina2.vairuoja(40, 2);
