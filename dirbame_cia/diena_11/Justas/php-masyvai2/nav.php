<?php
    $meniu = ["home", "about", "gallery", "contact", "blog"];
    // print_r($meniu);//test
?>


    <!-- paprastas isvedimas -->
        <nav>
            <ul>
                    <?php
                        for ($i = 0; $i < count($meniu);  $i++) {
                            echo "<li>" . $meniu[$i] . "</li>";
                        }
                    ?>
            </ul>
        </nav>

        <!-- su foreach -->
        <nav>
            <ul>
                    <?php
                        foreach ($meniu as $vienasPunktas) {
                            echo "<li>" . $vienasPunktas . "</li>";
                        }
                    ?>
            </ul>
        </nav>
