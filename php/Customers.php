<?php
$servername = "localhost";
$username = "rida";
$password = "Password1";
$my_db = "Tasks";
?>




<html>
<head>
<title> php test script - hope this works </title>
</head>
<body>
<nav class="horizontal">
<ul>
        <li><a href="ConnectCustomer.php">Customer Form</a> </li>
        <li><a href="Customers.php">Customers</a> </li>
        <li><a href="Parts.php">Parts</a> </li>
        <li><a href="Accounts.php">Accounts</a> </li>
</ul>
</nav>
<h1>CONTENTS OF Customer TABLE</h1>
<hr>
<table border = '2'>
<tr>
<th>CustomerID</th>
<th>GivenName</th>
<th>Surname</th>
</tr>

<?php
$con=mysqli_connect("$servername","$username","$password","$my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$firstname = mysqli_real_escape_string($con, $_POST['GivenName']);
$lastname = mysqli_real_escape_string($con, $_POST['Surname']);
$sql="INSERT INTO Customer (GivenName, Surname)
VALUES ('$firstname', '$lastname')";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "1 record added";

$result = mysqli_query($con,"SELECT * FROM Customer");
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['CustomerID'] ."</td>";
    echo "<td>" . $row['GivenName'] . "</td>";
    echo "<td>" . $row['Surname'] . "</td>";
    echo "</tr>";
}
mysqli_close($con);
?>

</table>
</body>
</html>