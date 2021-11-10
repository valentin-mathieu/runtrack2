<?php

if(!isset($_COOKIE['nbvisites']) || empty($_COOKIE['nbvisites']) )

setcookie('nbvisites', 1, time() + 3600 * 24 * 365);

    
else{
	setcookie('nbvisites', $_COOKIE['nbvisites']+1);
}


if(isset($_POST["reset"])){
    setcookie('nbvisites', $_COOKIE['nbvisites']=1);
}

?>

<html>
<body>
    <p> Nombre de visites : <?= htmlspecialchars($_COOKIE['nbvisites']) ?></p> 
	<form action="./index.php" method="post">
		<input type="submit" value="reset" name="reset">
	</form>
</body>
</html>