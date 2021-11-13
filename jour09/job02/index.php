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

$result = mysqli_query($con,"SELECT nom , capacite FROM $tablename");

echo "<table border='1'>
<tr>
<th>nom</th>
<th>capacite</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tbody>";
echo "<tr>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['capacite'] . "</td>";
echo "</tr>";
echo "</tbody>";
}
echo "</table>";

mysqli_close($con);
?>