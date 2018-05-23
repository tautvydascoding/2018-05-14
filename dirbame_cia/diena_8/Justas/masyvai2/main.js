console.log("Labas ");

var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log("pries idedant i prieki: " , keliautojas);
keliautojas.unshift("1999/05/05");//idedama i masyvo prieki

console.log("idedame i prieki: " , keliautojas);

var ilgis = keliautojas.length;//5
console.log("masyvo ilgis: " + ilgis);

// i masyvo negalima
keliautojas.push("2018-05");
console.log("po idejimo i gala: " + keliautojas);

//istrinti nuo galo
keliautojas.pop();
console.log("istrynus nuo galo: " + keliautojas);

//is priekio istrinti
keliautojas.shift();
console.log("is priekio istryne: " + keliautojas);

//istrinti su delete
delete keliautojas[2];
console.log("po istrynimo su delete: " , keliautojas);//nesugadina tvarkos, tik turini istrina





console.log(keliautojas.join("%  "));// prie kiekvieno elemento prijungia nurodytas objekta

console.log(keliautojas.toString());//pavercia i stringa
