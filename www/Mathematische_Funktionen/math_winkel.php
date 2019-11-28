<?php
    echo "<h2>Winkelfunktionen: </h2>";

    $w = 180;
    echo "<p> Winkel w: $w (in Grad) <br>";
    $wbm = deg2rad($w);
    echo "Winkel w: $wbm (im Bogenmaß)<br>";
    echo "sin(w): " . sin($wbm). "<br>";
    echo "cos(w): " . cos($wbm). "<br>";
    echo "tan(w): " . tan($wbm). "<br>";

    $x = 0.53;
    echo "<p> Wert x: $x<br>";
    echo "asin(x): " . rad2deg(asin($x)) . " (in Grad)<br>";
    echo "acos(x): " . rad2deg(acos($x)) . " (in Grad)<br>";
?>