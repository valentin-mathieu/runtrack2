<?php

function occurrences($str, $char) {
    
    $b = 0;
    
    for ($a = 0 ; isset($str[$a]) ; $a++) {

        if ($str[$a] === $char) {
        
            $b++ ;
            
        }
    
    }

    return $b; 

}

echo occurrences ("J'adore développer des sites web en PHP !", "e");

