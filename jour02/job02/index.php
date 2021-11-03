<?php

for ($x = 0; $x < 1338; $x=$x+1) {                             //Point de départ à 0 et de fin à 1337, affichage en pas de 1
    if ($x === 26 || $x === 37 || $x === 88 || $x === 1111 )   //Nous voulons exclure ces valeurs là 
    {
                                                               //Ne rien afficher sur ces valeurs-là
    }
    else
    echo $x.'<br>';                                           //Afficher toutes les autres valeurs
}

?>