<?php
 $meniu = ["home", "about", "gallery", "contact", "blog"];
 // print_r($meniu); //patikrinimas

 ?>
 <!-- paprastas variantas -->
 <!-- <nav>
   <ul>
     <li><?php echo $meniu[0]; ?></li>
     <li><?php echo $meniu[1]; ?></li>
     <li><?php echo $meniu[2]; ?></li>
     <li><?php echo $meniu[3]; ?></li>
     <li><?php echo $meniu[4]; ?></li>
   </ul>
 </nav> -->

<!-- geresnis variantas su for -->

<!-- <nav>
  <ul>
    <?php
    for ($i=0; $i < count($meniu) ; $i++) {
      echo "<li>" . $meniu[$i] . "</li>";
    }
     ?>
  </ul>
</nav> -->

<!-- foreach isvedimas  -->

<nav>
  <ul>
    <?php
    foreach ($meniu as $stalciausvalue) {
      echo "<li>" . $stalciausvalue . "</li>";
    }
     ?>
  </ul>
</nav>
