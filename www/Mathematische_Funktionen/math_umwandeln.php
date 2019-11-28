<?php
    echo "<b>Zahlen in Ganzzahlen verwandeln: </b><br>";
    $a = 4.75;
    echo "Variable a: $a <br>";
    echo "Nach unten mit floor(): " .floor($a) . "<br>";
    echo "Nach oben mit ceil(): " .ceil($a) . "<br>";
    echo "Gerundet mit round(): " .round($a) . "<br><br>";

    $b = -4.75;
    echo "Variable b: $b <br>";
    echo "Nach unten mit floor(): " .floor($b) . "<br>";
    echo "Nach oben mit ceil(): " .ceil($b) . "<br>";
    echo "Gerundet mit round(): " .round($b) . "<br>";
?>