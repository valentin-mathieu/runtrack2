<?php

$servername = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "jour08";
$tablename = "etudiants";

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM $tablename WHERE naissance > '2003-11-10'");

echo "<table border='1'>
<tr>
<th>id</th>
<th>prenom</th>
<th>nom</th>
<th>naissance</th>
<th>sexe</th>
<th>email</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['naissance'] . "</td>";
    echo "<td>" . $row['sexe'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";

mysqli_close($con);
?>