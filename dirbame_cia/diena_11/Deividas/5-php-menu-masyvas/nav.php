<?php



$manoMenu = array("Home", "about", "Gallery", "Contact", "Blog");

// print_r( $manoMenu ); //test

?>



<!-- ========SU foreach ISVEDIMAS======= -->

<nav>

    <ul>

        <?php

            // atspausdiname visus meniu punktus

            foreach($manoMenu as $stalciausValue) {

                echo "<li>" .  $stalciausValue . "</li>";

            }

         ?>

    </ul>

</nav>



<!-- ========SU FOR ISVEDIMAS======= -->

<!-- <nav>

    <ul>

        <?php

            // atspausdiname visus meniu punktus

            for ($i=0; $i < count($manoMenu); $i++) {

                echo "<li>" .  $manoMenu[ $i ] . "</li>";

            }

         ?>

    </ul>

</nav> -->



<!-- ========PAPRASTAS ISVEDIMAS======= -->

<!-- <nav>

    <ul>

        <li> <?php  $manoMenu[0]  ?>  </li>

        <li> <?php  $manoMenu[1]  ?>  </li>

        <li> <?php  $manoMenu[2]  ?>  </li>

        <li> <?php  $manoMenu[3]  ?>  </li>

    </ul>

</nav> -->
