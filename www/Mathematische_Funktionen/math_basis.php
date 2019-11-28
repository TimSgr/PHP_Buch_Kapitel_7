<?php
    echo "<p><b> Zahlensysteme: </b></p>";
    $x = 29;
    echo "Dezimalzahl: $x<br>";
    echo "als Dualzahl: " . decbin($x) . " = "
        . bindec(11101) . " = " . 0b11101 . "<br>";
    echo "als Oktalzahl: " . decoct($x) . " = "
        . octdec("35") . " = " . 035 . "<br>";
    echo "als Hexadezimalzahl: ". dechex($x) . " = "
        . hexdec("1d") . " = " . 0x1d . "<br>";
    echo "Zahl zur Basis 4: " . base_convert($x, 10, 4) . "<br>";
    echo "Zhal zur Basis 32: " . base_convert($x, 10, 32);
?>