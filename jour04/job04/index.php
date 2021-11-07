<?php

$new_str = "";

foreach ($_POST as $key => $value){ 
    $new_str = $new_str. "<tr>
            <td> $key </td>
            <td> $value </td>
        <tr>";
}    
?>


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
        <label for="email">Mail :</label>
        <input type="email" name="user_email">
    </div>
    <div>
        <button type="Submit">Submit</button>
    </div>
</form>

<style>
table {
    border: 1px black solid;
}
tr {
    border: 1px black solid;
}
td {
    border: 1px black solid;
}
th {
    border: 1px black solid;
}
</style>

<table>
    
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        
        <?php echo $new_str;?>
        
    </tbody>

</table>