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




?>
<html>
<body>
<form action="Parts.php" method="POST">
Search: <input type="text" name="partresult">
<input type="submit">
</form>
</body>
</html>
