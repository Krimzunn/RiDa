<?php
$servername = "localhost";
$username = "rida";
$password = "Password1";
$my_db = "Task";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $my_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




// Create table
$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";
// Execute query
if (mysqli_query($conn,$sql)) {
    echo "Table persons created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

?>
<html>
<body>
<form action="select.php" method="post">
Firstname: <input type="text" name="firstname">
Lastname: <input type="text" name="lastname">
Age: <input type="text" name="age">
<input type="submit">
</form>
</table>
</body>
</html>
