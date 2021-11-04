<?php

$str = "I'm sorry Dave I'm afraid I can't do that." ;  
$x = 0 ;
$voy = ['I','i','y','o','a','e','u'];

while(isset($str[$x])){

    for ($i = 0; isset($voy[$i]) ; $i = $i+1) {
        
        if ($str[$x] === $voy[$i]) {
        echo ($str[$x]);
        }

    }

$x++ ;    
}

?>