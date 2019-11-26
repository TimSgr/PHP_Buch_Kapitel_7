<?php
    function vtauschen($f)
    {
        $temp = $f[0];
        $f[0] = $f[1];
        $f[1] = $temp;
    }

    function rtauschen(&$f)

    {
        $temp = $f[0];
        $f[0] = $f[1];
        $f[1] = $temp;
    }

    $f[0]=12; $f[1]=18;
    echo "<br>Per Kopie, vorher: $f[0], $f[1]<br>";
    vtauschen($f);
    echo "Per Kopie, nachher: $f[0], $f[1]</br>";

    $f[0]=12; $f[1]=18;
    echo "<br>Per Referenz, vorher: $f[0], $f[1]<br>";
    rtauschen($f);
    echo "Per Referenz, nachher: $f[0], $f[1]</p>";
?>