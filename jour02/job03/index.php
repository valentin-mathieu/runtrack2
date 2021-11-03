<?php
 
for ($x = 0; $x <= 50 ; $x = $x+1) {         //Nombre de départ=0 ; Nombre de fin=50 ; Avance de 1 en 1                      
    if ($x <= 20) {
        echo '<i>'. $x .'</i>'.'<br/>';      // De 0 à 20 ça s'affiche en italique et on retourne à la ligne après chaque nombre                                          
    }

    elseif ($x > 20 && $x < 25) {
        echo $x .'<br>';                     // De 21 à 24 affichage normal mais avec retour à la ligne
    }
    
    elseif ($x > 24 && $x <= 41) {           // De 25 à 41 affichage en souligné et retour à la ligne
        echo '<u>'. $x .'</u>'.'<br>';                                           
    }

    elseif ($x === 42) {
        echo ("La Plateforme_".'<br>') ;     // On remplace le nombre 42 par "La Plateforme_"
    }
    
    elseif ($x > 42 && $x <=50) {
        echo '<u>'. $x .'</u>'.'<br>';       // On reprend le soulignement des nombres de 43 à 50                           
    }
}

for ($x = 51; $x <= 100 ; $x = $x+1) {
    echo $x .'<br>';                         // De 51 à 100 les chiffres s'affichent normalement avec retour à la ligne
} 

?>