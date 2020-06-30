<?php 
session_start();
$username = $_POST["username"];
$password = $_POST["password"];


$db = new PDO('mysql:host=localhost;dbname=projetwebdb','root', '');
$sql_cmd = ("SELECT * FROM users WHERE username = '$username' AND password = '$password';");
$res = $db->query($sql_cmd);


if ($res->fetch() >= 1) { 
	if (($username == "admin") && ($password == "admin")){
		header("Location: projetweb.php");
		$_SESSION ["is_loged"] = true;
		$_SESSION ["is_admin"] = true;
		exit;
	}else {
		header("Location: projectwebticketClient.php");
		$_SESSION ["is_loged"] = true;
		exit;
	}
}else ($res->fetch() == 0){
	header("Location: pageinitial.php")
}

?>