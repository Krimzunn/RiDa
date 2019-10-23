<?php
$servername = "localhost";
$username = "rida";
$password = "Password1";
$my_db = "Task";

$con=mysqli_connect("$servername","$username","$password","$my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result)) {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
}
mysqli_close($con);
?>

