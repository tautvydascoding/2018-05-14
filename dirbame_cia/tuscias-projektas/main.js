var prekiautojai = [];

prekiautojai[0] = "IKI";
prekiautojai[1] = "Maxima";
prekiautojai[2] = "Lidl";
prekiautojai[3] = "Rimi";
prekiautojai[50] = "Cia Market";
prekiautojai[1] = "Barbora";
console.log("prekybos centrai:", prekiautojai);
var temp = prekiautojai[3];
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = temp;
console.log("prekybos centrai:", prekiautojai);



function sukeistiMasyvo2elementus(x, y) {
    var temp = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = temp;
}
