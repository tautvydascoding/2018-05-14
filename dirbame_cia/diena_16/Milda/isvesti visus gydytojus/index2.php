
<?php

// isvesti visus gydytojus
//
//
// 1. paspaudus ant betkurio gydytojo vardo  - vartotoja perkelti i "template-doctor.php" faila
// (galite panaudoti "<a> </a>")
//
// 2. template-doctor.php faile iskviesti savo pasirasyta f-ja  getDoctor(...);
// ir isvesti visa informacija tik apie sita gydytoja
// <h2>NR: ...</h2>
// <h3> vardas pavarde</h3>

require_once('db_functions-full.php');



 $visiDaktarai = getDoctor();


while ($daktaras = mysqli_fetch_assoc($visiDaktarai)) {
   "<h3>" ;
  echo "<a href = 'template-doctor.php?numeris=" ?php echo. $daktaras['id'] ." '>"
  "</a>";
echo  "</h3>";
  // print_r($daktaras);




}



















 ?>
