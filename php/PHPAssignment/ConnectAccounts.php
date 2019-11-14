<?php
$servername = "localhost";
$username = "rida";
$password = "Password1";
$my_db = "Tasks";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $my_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




// Create table
$sql="CREATE TABLE Accounts(
AccountID INT(6) AUTO_INCREMENT PRIMARY KEY,
CustomerID Int(6) NOT NULL,
ProductID Int(6) NOT NULL,
TotalCost Int(9) NOT NULL)";
// Execute query
if (mysqli_query($conn,$sql)) {
    echo "Table persons created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}




?>
<html>
<body>


<form action="Accounts.php" method="post">
Firstname: <input type="text" name="GivenName">
Lastname: <input type="text" name="Surname">
<input type="submit">
</form>
</body>
</html>
