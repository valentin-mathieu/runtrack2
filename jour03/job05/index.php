<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait" ;  
$dic = [ "consonnes" => ['n','s','t','p','l','m','r','q','d','c'] ,
         "voyelles" => ['O','e','a','i','u','o']] ;
$voyelles = 0 ;
$consonnes = 0 ;
$x = 0 ;

while(isset($str[$x])){

    for ($a = 0; isset($dic["voyelles"][$a]) ; $a = $a+1) {
        if ($str[$x] === $dic["voyelles"][$a]) {
            $voyelles++;
        }
    }

    for ($i = 0; isset($dic["consonnes"][$i]) ; $i = $i+1) {
        if ($str[$x] === $dic["consonnes"][$i]) {
            $consonnes++;
        }
    }

$x++ ;    

}


?>

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
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php echo $voyelles ?></td>
            <td><?php echo $consonnes ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>