<?php
$host="localhost";
$username="root";
$password="root";
$dbname="passwordlogger_database";

$con=mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL" .mysqli_connect_error();
}

$query= "SELECT * FROM passwordlogger";
$result=mysqli_query($con,$query);

echo"<table>";
while($row=mysqli_fetch_array($result)){
	echo"<tr><td>".$row['name']."</td><td>".$row['url']."</td><td>".$row['username']."</td><td>".$row['password']."</td></tr>";
}
echo"</table>";

mysqli_close($con);
/*echo"<center><h3>Success!!!</h3><h3>Your data about the password is added to the database</h3><a href='index.html'>GO BACK</a></center>"
*/
?>
