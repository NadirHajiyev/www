<?php
$host="localhost";
$username="root";
$password="root";
$dbname="passwordlogger_database";

$con=mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL".mysqli_connect_error();
}

$sql= "INSERT INTO passwordlogger(name, url, username, password)
VALUES
('$_GET[name]', '$_GET[url]', '$_GET[username]', '$_GET[password]')";

if(!mysqli_query($con, $sql)){
	die('Error:'.mysql_error($con));
}

echo"<center><h3>Success!!!</h3><h3>Your data about the password is added to the database</h3><a href='index.html'>GO BACK</a></center>"
?>
