<?php 
$localhost='localhost';
$username='root';
$password='root';
$dbname='log_database';*/
$con=mysqli_connect("localhost","root","root","log_database");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO log_table (log_name, log_description)
VALUES
('$_GET[logname]','$_GET[logdescription]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
?>
