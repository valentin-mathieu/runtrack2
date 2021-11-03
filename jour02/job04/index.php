<?php

for ($x = 1; $x <= 100 ; $x = $x+1) {          //On veut afficher les nombres entiers de 1 a 100

    if ($x % 3 === 0 && $x % 5 === 0) {        //Si les nombres sont multiples de 3 et de 5
        echo "FizzBuzz" .'<br>';               //Les remplacer par "FizzBuzz"
    }

    elseif ($x % 3 === 0) {                     // Si ils sont multiples de 3 
        echo "Fizz" . '<br>';                   // Les remplacer par Fizz
    }

    elseif ($x % 5 === 0) {                     // Si ils sont multiples de 5 
        echo "Buzz" . '<br>';                   // Les remplacer par Buzz 
    }

    else {
        echo $x . '<br>';                       // Pour tous les autres nombres, les afficher normalement avec retour à la ligne
    }
}

?>
