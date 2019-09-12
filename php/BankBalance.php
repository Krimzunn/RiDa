<?php
$nameErrr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErrr = "Name is Required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is Required";
    } else {
        $email = test_input($_POST["email"]);
    }  
    if (empty($_POST["website"])) {
        $websiteErr = "";
    } else {
        $website = test_input($_POST["Website"]);
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is Required";
    } else {
        $gender = test_input($_POST["Gender"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>
<body>
    
</body>
</html