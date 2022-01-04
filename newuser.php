<?php

$login=$_GET["login"];
$pwd=$_GET["password"];
$name=$_GET["name"];
$perm=$_GET["right"];

$login=htmlspecialchars($login);
$pwd=htmlspecialchars($pwd);
$name=htmlspecialchars($name);
$perm=htmlspecialchars($perm);

// Database configuration
$host = "localhost";
$username = "root";
$password = "PeGaZe123";
$database_name = "security";
$mysqli = new mysqli($host,$username,$password,$database_name);
if ($mysqli->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    die();
}

$req = 'INSERT INTO users (id, login, password, name, r) VALUES (NULL, "'.$login.'", "'.$pwd.'", "'.$name.'", "'.$perm.'")';


if ($mysqli->query($req)) {
	echo "Le compte a bien été créé<br>";
	echo '<a href=accueil234.php>Retourner sur la page précédente</a>';
}

?>