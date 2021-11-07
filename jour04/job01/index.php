<form action="./index.php" method="get">
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
        <label for="email">Mail :</label>
        <input type="email" id="email" name="user_email">
    </div>
    <div>
        <button type="Submit">Submit</button>
    </div>
</form>

<?php 
    
$i = 0 ;
    
foreach ($_GET as $value) {      

    if ($value != null) {
   
        $i++;

    }
    
}

echo $i;




    