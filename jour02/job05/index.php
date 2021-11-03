<?php

for ($x = 0; $x <= 1000 ; $x = $x+1) {

    if ( $x % $x === 0 && $x % 1 === 0 ) {      //Je voulais mettre comme conditions que le nombre puisse se diviser par lui-même et par 1 
        echo $x .'<br>';
    }
}

?>