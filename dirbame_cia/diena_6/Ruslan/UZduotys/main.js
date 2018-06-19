// // console.log("Labas ");
// var x = 0;
// x = prompt("Skaicius");

// function printKaina(x) {
//     alert(x);
// }

// printKaina(x);


// y = document.querySelector(".drum").clientHeight;
// alert(y);


var name = "";
var lname = "";
function getVardasPavarde() {
    name = prompt("Vardas");
    lname = prompt("Pavarde");
    return (name + " " + lname);
}


function CreateElement () {
    var head = document.createElement("H2");
    var head_text = document.createTextNode ("THIS IS H2");
    head.appendChild(head_text);
    document.body.appendChild(head);
    return (head.clientHeight); 
}

