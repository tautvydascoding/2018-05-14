console.log("Labas ");


var vardas1 = "Tomas";
var vardas2 = "Antanas";

// ar vardai nelygus?

if ( vardas1 == "Tomas") {
    console.log( "Labas" + vardas1 );
}


if (vardas1 != vardas2) {
    console.log( vardas1, vardas2, "abu vardai NEvienodi");
} else {
    console.log( vardas1, vardas2, "abu vardai vienodi" );}


console.log( "tikrinsiu ar vardai yra: Tomas ir Karolis");
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    document.write( " vardai yra: Tomas ir Karolis <br>");
} else {
        document.write( "!! vardai NERA: Tomas ir Karolis <br>");
        document.querySelector( 'h1').innerHTML += "<p> ";
    }
