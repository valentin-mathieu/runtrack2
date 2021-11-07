<form action="./index.php" method="post">
    <div>
        <label for="username">Username :</label>
        <input type="text" id="username" name="username">
    </div>  
    <div>
        <label for="username">Password :</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <button type="Submit" name="Submit">Submit</button>
    </div>
</form>

<?php

    
    if (isset($_POST['username']) && $_POST['username'] == "John" && isset($_POST['password']) && $_POST['password'] == "Rambo") {

        echo "C'est pas ma guerre.";
    }

    if (isset($_POST['username']) && $_POST['username']!== "John" && isset($_POST['password']) && $_POST['password']!== "Rambo") {

        echo "Votre pire cauchemar.";
    }


?>