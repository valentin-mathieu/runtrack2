<?php
    $x = -1;                                             //définir la valeur de départ
    while( $x < 1337 ) {                                //définir la valeur de fin de notre boucle
        echo $x = $x + 1 ;                              //afficher les nombres de 1 en 1 
        echo "<br>";                                   //retour à la ligne entre chaque nombre
        
        if ($x == 42) {                                 //quand le chiffre est 42
            echo '<b> <u> 42 </b> </u> <br>';          //il faut le souligner et le mettre en gras 
        }  
    }
?>