
        <?php
 function daugVardu()
{
    static $nr = 0;
    if ($nr < 5) {
        $nr++;
       daugVardu();
    }
    echo "Zuikis: $nr  ";
}
daugVardu();
