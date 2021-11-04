<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie." ;  
$x = 0 ;

while (isset($str[$x])){

    if ($x%2==0) {
        echo $str[$x];
    }

    $x++;
}

?>