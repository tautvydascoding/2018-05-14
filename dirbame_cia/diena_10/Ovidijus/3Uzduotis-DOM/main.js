// console.log("Labas ");

// document.querySelector("h1").innerHTML += "Idedu si teksta";
//
// // Naujo elemento kurimas(js)
// var manoElementas = document.createTextNode("Sukurtas elementas");
//
// var manoBody = document.querySelector("body");
//
// // console.log("mano elementas: " + manoElementas);
// // console.log("mano body: " + manoBody);
//
// manoBody.appendChild( manoElementas); // veiki tik su node
//
//
// var manoFooter = document.createElement("footer"); //objektas
// console.log( manoFooter );



var manoHeader = document.createElement("header");
// console.log(manoHeader);

var manoTextas = document.createTextNode("Mano sukurtas headerio tekstas");
var manoBody = document.querySelector("body");
manoHeader.appendChild(manoTextas);
console.log(manoHeader);

manoBody.appendChild(manoHeader);

var manoAside = document.querySelector("aside");
var manoH1 = document.querySelector("h1");

document.body.insertBefore(manoHeader, manoAside);
