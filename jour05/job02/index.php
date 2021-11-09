<?php

function bonjour($jour){

    if ($jour == true){
        return "Bonjour";
    }

    if ($jour == false) {
        return "Bonsoir";
    }

}

echo bonjour(40);