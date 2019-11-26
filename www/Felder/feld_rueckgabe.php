<?php
    function zusammen($a, $b)
    {
        for($i=0; $i<count($a); $i++)
        {
            $c[$i*2] = $a[$i];
            $c[$i*2+1] = $b[$i];
        }
        return $c;
    }

    $x = array(1,2,3);
    $y = array(11,12,3);
    $z = zusammen($x,$y);

    echo "Zusammen: ";
    for($i=0;$i<count($z); $i++)
        echo "$z[$i] ";
    echo "<br>";
?>