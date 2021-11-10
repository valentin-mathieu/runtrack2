<?php

session_start ();

?>

<html>
    <body>
        <form action="./index.php" method="post">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom">
            <button type="submit" name="submit">Submit</button>
            <button type="submit" name="reset">Reset</button>
        </form>

        <p> Voici la liste des prénoms de la session :</p>

<?php 

foreach ($_POST as isset($_SESSION['prenom'])) {
   
        echo $_SESSION['prenom'];
        
    

} 

?>
       


    </body>
</html>