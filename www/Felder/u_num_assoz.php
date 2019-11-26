<?php
    $Spalten = array("Hersteller", "Typ", "GB", "Preis", "Artnummer");
    // 1.Zeile und 2.Zeile
    $technik = array(array("Quantum", "Fireball CX", 40, 112, "HDA-208"),
                  array("Quantum", "Fireball Plus", 80, 128, "HDA-163"));

    // 3.Zeile
    $technik[2][0] = "Fujitsu";
    $technik[2][1] = "MPE 3136";
    $technik[2][2] = 160;
    $technik[2][3] = 149;
    $technik[2][4] = "HDA-171";

    // 4.Zeile
    $technik[3][0] = "Seagate";
    $technik[3][1] = "310232A";
    $technik[3][2] = 60;
    $technik[3][3] = 122;
    $technik[3][4] = "HDA-144";

    // 5.Zeile
    $technik[4][0] = "IBM Corporation";
    $technik[4][1] = "DJNA 372200";
    $technik[4][2] = 240;
    $technik[4][3] = 230;
    $technik[4][4] = "HDA-140";

    echo "<table border='1'>";
    for($i=0; $i<5; $i++)
    {
        echo "<tr>";
        foreach($Spalten as $wert)
        {
        echo "<td>" .$wert[$i].  "</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($technik[$i] as $name=>$wert)        
            echo "<td> $wert</td>";
        echo "</tr>";
    }
    echo "</table>";
?>