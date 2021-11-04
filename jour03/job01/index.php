<?php

$tab = [200, 204, 173, 98, 171, 404, 459];               //Création du tableau avec les différentes valeurs
$i = 0;                                                  //Index de départ à 0 

while (isset($tab[$i])){                                 //Tant que l'index existe, on le parcourt
    
    if ($tab[$i]%2==1) {                                 //Si le nombre est impair
        echo ("$tab[$i] est impair" .'<br>');            //On affiche que la valeur est impaire
    } 

    else {
        echo ("$tab[$i] est pair" .'<br>');              //Sinon on affiche que la valeur est paire
    }  
    $i++;

}

?>
