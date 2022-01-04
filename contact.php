


<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" type="text/css" href="contact.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   </head>
    <body>
    	<h1 style="text-align:center">Page des contacts</h1>


<?php
session_start();


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


if (isset($_GET["contact"])) {
	$contact = $_GET["contact"];
	if (isset($_SESSION['auth'])) {
		$name = $_SESSION['auth'];
	}
	else {
	$name = "anonyme";
	}
	$req = 'INSERT INTO contact (comm_id, author, comment) VALUES (NULL, "'.$name.'", "'.$contact.'")';


	if ($mysqli->query($req)) {
		echo "<p>Le commentaire a bien été ajouté</p><br>";
		echo '<a href=accueil1.php><p>Retourner sur la page précédente</p></a>';
	}
}

$result = mysqli_query($mysqli,"SELECT * FROM contact");

echo "<table border='1' >
<tr>
<th>Author</th>
<th>Comment</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['comment'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($mysqli);
?>



  </body>
</html>
