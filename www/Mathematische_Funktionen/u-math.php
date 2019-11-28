<?php
    echo "<table border='1'>";
    echo "<tr> <td>x </td>
          <td> radiant </td>
          <td> sin </td>
          <td> cos </td>
          <td> &radic; </td>
          <td> x<sup>2</sup> </td>
          <td> log </td>
          <td> log<sub>10</sub> </td>
          <td> e<sup>1/x</sup> </td>
          <td> dual </td>
          <td> hex </td>";
          
    echo "</tr>";

    for($x=15; $x<=90; $x=$x+15)
    echo "<tr>
          <td> $x </td>
          <td>". round(deg2rad($x), 2)."</td>
          <td>". round(sin(deg2rad($x)), 2)."</td>
          <td>". round(cos(deg2rad($x)), 2)."</td>
          <td>". round(sqrt($x), 2). "</td>
          <td>". round(pow($x,2), 2). "</td>
          <td>". round(log($x), 2). "</td>
          <td>". round(log10($x), 2). "</td>
          <td>". round(exp(1/$x), 2). "</td>
          <td>". round(decbin($x), 2). "</td>
          <td>". dechex($x). "</td> 
          </tr>";
    
    echo "</table>";