<?php

function daugVardu() {
    static $nr = 0;

    // ar tiesa?
    if ($nr < 5) {
        $nr++;
        daugVardu(); //  nuo cia, nuo cia, cia

        echo "Tadas: $nr";
    }
}

daugVardu(); // nuo cia






//
