<?php
// mysqli_select_db('db_membership',mysqli_connect('localhost','root',''))or die(mysqli_error());
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "db_membership";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;

?>