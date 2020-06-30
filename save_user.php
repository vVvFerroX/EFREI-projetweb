<?php
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$pswrepeat = $_POST["pswrepeat"];
$sexe = $_POST["sexe"];



if ( $password != $pswrepeat ) {
	header("Location: pageinitial.php");
}else{	
	$db = new PDO('mysql:host=localhost;dbname=projetwebdb','root', '');
	$sql_cmd = "insert into users values (NULL, '$email','$username', '$password', '$sexe')";
	$res = $db->query($sql_cmd);

	header("Location: pageinitial.php");
}


?>