<?php
$servername = "localhost";
$username = "rida";
$password = "Password1";
$my_db = "Tasks";


$con=mysqli_connect("$servername","$username","$password","$my_db");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['GivenName']);
$lastname = mysqli_real_escape_string($con, $_POST['Surname']);
$sql="INSERT INTO Customer (CustomerID, GivenName, Surname)
VALUES ('$firstname', '$lastname', '$age')";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>