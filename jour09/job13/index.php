<?php

$servername = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "jour08";
$tablename = "salles";
$tablename2 = "etage";

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT salles.nom as salles_nom , etage.nom as etage_nom FROM $tablename , $tablename2 WHERE salles.id_etage = etage.id");

    echo "<table border='1'>
    <tr>
    <th>nom_salle</th>
    <th>nom_etage</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['salles_nom'] . "</td>" ;
    echo "<td>" . $row['etage_nom'] . "</td>" ;
    echo "</tr>";
    echo "</tbody>";
    }
    echo "</table>";

    mysqli_close($con);

?>