<?php
session_start();
$login=$_GET["login"];
$pwd=$_GET["password"];

$login=htmlspecialchars($login);
$pwd=htmlspecialchars($pwd);

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
$login=$mysqli->real_escape_string($login);
$query='SELECT * from users where login="'.$login.'" AND password="'.$pwd.'"';

 

if (!$result = $mysqli->query($query))
{
    print $query;
    die("Erreur SQL");
}
if ($result->num_rows === 0) {
    // Aucun résultat
    print "Aucun résultat";
    print "<br/>";
    print $query;
}
else
{
    $row=$result->fetch_assoc();
    print $query."<br/>";
    print "Welcome ".$row["name"]."<br/>";

}
?>