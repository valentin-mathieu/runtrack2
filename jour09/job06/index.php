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

$result = mysqli_query($con, "SELECT count(*) as total from etudiants");
$data = mysqli_fetch_array($result) ;
    echo "<table border='1'>
    <tr>
    <th>nb_etudiants<th>
    </tr>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $data['total'] . "</td>" ;
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

?>