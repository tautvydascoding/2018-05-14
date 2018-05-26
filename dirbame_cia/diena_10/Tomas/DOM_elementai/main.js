// console.log("Labas ");
// document.querySelector("h1").innerHTML += "Idedu si teksta :P";
//
// var manoElementas = document.createTextNode("Sita teksta sukuriau pats");
// var manoBody = document.querySelector("body");
// // console.log("manoElementas", manoElementas); test
// // console.log("manoBody", manoBody);test
//
// manoBody.appendChild(manoElementas);
//
// document.querySelector("body").appendChild(manoElementas);
//
// // =========================================
// // h1 elemento perkelimas
// var manH1 = document.querySelector("h1");
// manoBody.appendChild(manH1);
// // =========================================
//
// var manoFooteris = document.createElement("footer");
// console.log(manoFooteris); // test
// ===========================================
var manoHeader = document.createElement("header");
console.log(manoHeader);

// =============================================
var tekstas = document.createTextNode("Antraste1");
// console.log(tekstas);
// =============================================
manoHeader.appendChild(tekstas);
// =============================================
// Susirasti body
document.querySelector("body").appendChild(manoHeader);
// document.manoBody
var manoBody=document.querySelector("body");
manoBody.appendChild(manoHeader);

var manoAside = document.querySelector("aside");
document.body.insertBefore(manoHeader, manoAside);
