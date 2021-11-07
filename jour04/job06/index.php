<form action="./index.php" method="get">
    <div>
        <label for="number">Nombre :</label>
        <input type="number" name="number">
    </div>  
    <div>
        <button type="Submit" name="Submit">Submit</button>
    </div>
</form>

<?php

foreach ($_GET as $value) {

    if ($value % 2 === 0) {
        echo "Ce nombre est pair";
    }
        
    if ($value % 2 === 1){
        echo "Ce nombre est impair"; 
    }
    
}
?>