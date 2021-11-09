<?php   

function calcule($a, $operation, $b) {
    
    if ($operation=='%') {
        
        $resultat = ($a % $b);
        return $resultat;

    }

    if ($operation=='+') {

        $resultat = ($a + $b);
        return $resultat;

    }

    if ($operation=='-') {

        $resultat = ($a - $b);
        return $resultat;

    }

    if ($operation=='/') {

        $resultat = ($a / $b); 
        return $resultat;

    }
    
    if ($operation=='*') {

        $resultat = ($a * $b);
        return $resultat;

    }


}

echo calcule(14, '*', 3);