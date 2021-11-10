<?php
session_start();

if(!isset($_SESSION["nbvisites"])){
	$_SESSION["nbvisites"]=0;
}
    
else{
	$_SESSION["nbvisites"]++;
}
echo $_SESSION["nbvisites"];


if(isset($_POST["reset"])){
    session_destroy();
}

?>
<html>
<body>
	<form action="./index.php" method="post">
		<input type="submit" value="reset" name="reset">
	</form>





