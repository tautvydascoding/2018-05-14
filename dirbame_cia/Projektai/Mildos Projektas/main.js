function toDay() {
  var dayName = new Array ("Sekmadienis", "Pirmadienis", "Antradienis", "Trečiadienis", "Ketvirtadienido", "Penktadienis", "Šeštadienis");

  var monName = new Array ("sausio", "vasario", "kovo", "balandžio", "gegužės", "birželio", "liepos", "rugpjūčio", "rugsėjo", "spalio", "lapkričio", "gruodžio");

  var now = new Date();

  document.write("Šiandien yra " + now.getFullYear() + " m. " + monName[now.getMonth()] + " " + now.getDate() + " d. " + dayName[now.getDay()] + ".");
}
