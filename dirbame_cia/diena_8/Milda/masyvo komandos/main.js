

var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log( "pries idejima:", + keliautojas);
// push dedame i masyvo prieki i 0 stalciu, o visus paslinks
keliautojas.unshift( "1990/05/05");
console.log( "idedame i prieki:" + keliautojas);

// loginis triukas
var ilgis = keliautojas.lenght;
console.log("masyvo ilgis:" + ilgis);
keliautojas [ilgis]="baige su pagyrimu";
keliautojas [keliautojas.lenght ] = 580;
console.log("po idejimo:", keliautojas);


// i masyvo gala idedame
keliautojas.push("2018-05");
console.log("po idejimo i gala:", keliautojas);

// istrina is galo pasutini elementa
keliautojas.pop("");
console.log("po istrynimo is galo:", keliautojas);

// istrina is pacio priekio elementa, ir paslenka, kad viskas butunuo 0)
keliautojas.shift();

delete keliautojas[2];
console.log("po istrynimo delete 2:", keliautojas);


// idejus join
console.log(keliautojas.join ("; ") );
console.log(keliautojas.tostring (   ";"));
