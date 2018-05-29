<?php

$manoMeniu = array("Home", "about", "Gallery", "Contact")

 ?>
 <!-- <nav>
     <ul>
         <li><?php $manoMeniu[0] ?></li>
         <li><?php $manoMeniu[1] ?></li>
         <li><?php $manoMeniu[2] ?></li>
         <li><?php $manoMeniu[3] ?></li>
     </ul>
 </nav> -->
<!--
 <nav>
     <ul>
         <?php
for ($i=0; $i < 4; $i++) {
    echo "<li>" . $manoMeniu[$i] . "</li>";
}
          ?>
     </ul>
 </nav> -->

 <nav>
     <ul>
         <?php
foreach ($manoMeniu as $stalciausValue) {
    echo "<li>" . $stalciausValue . "</li>";
}
          ?>
     </ul>
 </nav>





 
