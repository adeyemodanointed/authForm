<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTHENTICATION FORM</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div>
    <h3>MY REGISTRATION FORM</h3>
    <form class="regForm" action="" method="POST">
        <input type="text" name="fullName" placeholder="Enter your full name" >
        <input type="email" name="email" placeholder="Enter your email address">
        <input type="tel" name="phone" placeholder="Enter your phone number" >
        <input type="password" name="password" id="password" placeholder="Enter your Password" required>
        <input type="password" name="cpassword" id="cpassword" placeholder="Re-enter password" required>
        <input type="text" name="address" placeholder="Enter your address" required>
        <input type="submit" name="submit" value="SUBMIT" id="submit">
    </form>
</div>
    
</body>
</html>


<?php

// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $passwordErr = $cpasswordErr = $addressErr = "";
$name = $email = $phone = $password = $cpassword = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fullName"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["fullName"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $phoneErr = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["phone"] = $phone;
$_SESSION["address"] = $address;

print_r($_SESSION);

?>
