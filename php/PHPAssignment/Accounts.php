<?php
$servername = "localhost";
$username = "rida";
$password = "Password1";
$my_db = "Tasks";
?>




<html>
<head>
<link rel = "Stylesheet" type = "text/css" href="css.css" />
<title> php test script - hope this works </title>
</head>
<body>
<header>
<img src = "index.png" class="banner">
<nav class="horizontal">
<ul>
        <li><a href="ConnectCustomer.php">Search For an Item</a> </li>
        <li><a href="Customers.php">Customers</a> </li>
        <li><a href="Parts.php">Parts</a> </li>
        <li><a href="Accounts.php">Accounts</a> </li>
</ul>
</nav>
</header>
<h1>CONTENTS OF Accounts TABLE</h1>
<hr>
<table border = '2'>
<tr>
<th>AccountID</th>
<th>CustomerID</th>
<th>ProductID</th>
<th>TotalCost</th>
</tr>

<?php
$con=mysqli_connect("$servername","$username","$password","$my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Accounts");

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['AccountID'] ."</td>";
    echo "<td>" . $row['CustomerID'] . "</td>";
    echo "<td>" . $row['ProductID'] . "</td>";
    echo "<td>" . $row['TotalCost'] . "</td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>