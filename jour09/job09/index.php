<?php

$servername = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "jour08";
$tablename = "salles";

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM salles ORDER BY capacite DESC");

echo "<table border='1'>
<tr>
<th>id</th>
<th>nom</th>
<th>id_etage</th>
<th>capacite</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['id_etage'] . "</td>";
    echo "<td>" . $row['capacite'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";

mysqli_close($con);
?>