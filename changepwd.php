<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        
	</head>
</html>
<?php

$login=$_GET["login"];
$newpwd=$_GET["newpassword"];

$login=htmlspecialchars($login);
$newpwd=htmlspecialchars($newpwd);

// Database configuration
$host = "localhost";
$username = "root";
$password = "PeGaZe";
$database_name = "security";
$mysqli = new mysqli($host,$username,$password,$database_name);
if ($mysqli->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    die();
}

$query='SELECT * from users where login="'.$login.'"';

if (!$result = $mysqli->query($query))
{
	die("Erreur SQL");
}
if ($result->num_rows === 0) {
    // Aucun résultat
    print "Aucun résultat";
    print "<br/>";
}
else
{
	$req='UPDATE users SET password = "'.$newpwd.'" WHERE login ="'.$login.'"';

	if ($mysqli->query($req)) {
		echo "<p>Le mot de passe a bien été changé</p><br>";
		echo '<a href=accueil234.php><p>Retourner sur la page précédente</p></a>';
	}
}

?>