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

$result = mysqli_query($con,"SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");

echo "<table border='1'>
<tr>
<th>prenom</th>
<th>nom</th>
<th>naissance</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['naissance'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";

mysqli_close($con);
?>