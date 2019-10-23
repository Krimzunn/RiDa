<?php
$servername = "localhost";
$username = "rida";
$password = "Password1";
$my_db = "Task";
?>




<html>
<head>
<title> php test script - hope this works </title>
</head>
<body>
<h1>CONTENTS OF PERSON TABLE</h1>
<hr>
<table border = '2'>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>
</tr>

<?php
$con=mysqli_connect("$servername","$username","$password","$my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con,"DELETE FROM Persons WHERE LastName='Griffin'");
$result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] ."</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "</tr>";
}
mysqli_close($con);
?>

</table>
</body>
</html>