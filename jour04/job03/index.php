<form action="./index.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="user_name">
    </div>
    <div>
        <label for="surname">Prénom :</label>
        <input type="text" name="user_surname">
    </div>
    <div>
        <label for="age">Âge :</label>
        <input type="number" name="user_age">
    </div>
    <div>
        <button type="Submit">Submit</button>
    </div>
</form>

<?php 
    
$i = 0 ;
    
foreach ($_POST as $value){
   
    if ($value != null){
    
        $i++;
    
    }
    
}

echo $i;