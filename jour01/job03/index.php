<?php

$mystr = "Hello";
$myinteger = 10 ;
$myfloat = 10.1;
$mybool = true;

echo '
<html>
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
<body>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>String</td>
            <td>mystr</td>
            <td>'.$mystr.'</td>
        </tr>

        <tr>
            <td>Integer</td>
            <td>myinteger</td>
            <td>'.$myinteger.'</td>
        </tr>

        <tr>
            <td>Float</td>
            <td>myfloat</td>
            <td>'.$myfloat.'</td>
        </tr>

        <tr>
            <td>Bool</td>
            <td>mybool</td>
            <td>'.$mybool.'</td>
        </tr>
    </tbody>

</table>

</body>
</html> ';
?>