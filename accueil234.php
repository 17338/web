<?php

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


$result = mysqli_query($mysqli,"SELECT * FROM users");

echo '<h1>Liste des utilisateurs</h1>';

echo "<table border='1'>
<tr>
<th>Login</th>
<th>Name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['login'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "</tr>";
}
echo "</table><br><br>";

mysqli_close($mysqli);
?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" type="text/css" href="accueil234.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
    	<h4>Créer un nouvel utilisateur</h4>
    	<form type="get" action="newuser.php">
    		<p>Login : </p>
    		<input type="text" name="login" id="login">
    		<p>Password : </p>
    		<input type="password" name="password" id="password">
    		<p>Nom : </p>
    		<input type="text" name="name" id="name">
    		<input type="radio" name="right" value="0" checked style="display:none">
    		<br><br>
    		<input type="submit" value="Entrer">
    	</form>

    	<h4>Changer le mot de passe d'un utilisateur</h4>
    	<form type="get" action="changepwd.php">
    		<p>Login : </p>
    		<input type="text" name="login" id="login">
    		<p>Nouveau password :</p>
    		<input type="password" name="newpassword" id="newpassword">
    		<br><br>
    		<input type="submit" value="Entrer">
    	</form>
    </body>
</html>
