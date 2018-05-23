console.log("Labas ");


// uzduotis  Array
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
console.log("pries idedant: " , keliautojas);

keliautojas.unshift("1999/05/05"); //idedame i masyvo prieki
console.log("idedame i prieki su UNISHIFT: " , keliautojas);

var ilgis = keliautojas.length;
console.log("masyvo ilgis su LENGTH: " , ilgis);


// triukas
keliautojas[ilgis] = "baige su pagyrimu";
keliautojas[keliautojas.length] = 580;
console.log("LENGTH pridejo du papildomus masyvo elementus gale :" , keliautojas);

// masyva isveda i STRING su nurodytu skyrikliu
console.log("JOIN irankis padaro atskyrimus su (/) :" , keliautojas.join("/"));

keliautojas.push("2018/05");
console.log("PUSH ideda i gala: ", keliautojas);

keliautojas.pop();
console.log("istrina su POP paskutini masyvo elementa: " , keliautojas);

keliautojas.shift();
console.log("SHIFT istrina is pacio priekio: ", keliautojas );

delete keliautojas[2];
console.log("delete istrina tik stalciaus turini o pati stalciu palieka", keliautojas);
