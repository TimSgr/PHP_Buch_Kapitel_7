<?php
    if(!file_exists("u_num.txt"))
        exit("Datei kann nicht gefunden werden");
    
    $fp = @fopen("u_num.txt","r");
    if(!$fp)
        exit("Datei steht nicht zum Lesen bereit");

    //Alle Werte in ein Feld lesen
    $tp = array();
    while (!feof($fp))
    {
        $name = fgets($fp, 100);
        $alter = fgets($fp, 100);
        if(!(feof($fp) && $alter == ""))
            array_push($tp, $name,doubleval($alter));
    }
        

    fclose($fp);
    //Anzahl der Werte oberhalb der Grenze ermitteln
    $c = 0;
    $d = 0;
    $grenze1 = 25;
    $grenze2 = 50;
    foreach($tp as $element)
        if($element > $grenze1)
            $c++;
        if($element < $grenze2)
            $d++;
    //Ausgabe
    if(count($tp) > 0)
    {
        $anteil1 = $c / count($tp) * 100;
        $ausgabe1 = number_format($anteil1, 2, ",", ".");
        echo "Unterhalb von $grenze1 Jahren: $ausgabe1%";

        echo "<br>";

        $anteil2 = $d / count($tp) * 100;
        $ausgabe2 = number_format($anteil2, 2, ",", ".");
        echo "Oberhalb von $grenze2 Jahren: $ausgabe2%";
    }
    else
        echo "Die Datei beihaltet keine Werte";
?>