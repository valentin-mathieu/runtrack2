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

$result = mysqli_query($con, "SELECT sum(capacite) as capacite_totale from salles");
$data = mysqli_fetch_array($result) ;
    echo "<table border='1'>
    <tr>
    <th>capacite_totale<th>
    </tr>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $data['capacite_totale'] . "</td>" ;
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

?>