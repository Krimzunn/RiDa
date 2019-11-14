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
<img src = "index.png" class="banner">
<nav class="horizontal">
<ul>
        <li><a href="ConnectParts.php">Customer Form</a> </li>
        <li><a href="Customers.php">Customers</a> </li>
        <li><a href="Parts.php">Parts</a> </li>
        <li><a href="Accounts.php">Accounts</a> </li>
        <li><a href="Contact.php">Contact Us</a> </li>
</ul>
</nav >
<h1>CONTENTS OF Parts TABLE</h1>
<hr>
<table border = '2'>
<tr>
<th>ProductID</th>
<th>Price</th>
<th>Descriptions</th>
</tr>

<?php
$con=mysqli_connect("$servername","$username","$password","$my_db");
// Check connection
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $part = test_input($_POST["partresult"]);
    $result = mysqli_query($con,"SELECT * FROM Parts WHERE Descriptions LIKE '%{$part}%'");
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['ProductID'] ."</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Descriptions'] . "</td>";
        echo "</tr>";
    }
}
?>

</table>
</body>
</html>