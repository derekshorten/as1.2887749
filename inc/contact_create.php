<?php
$fullname = $_GET["name"];
$gender = $_GET["gender"];
$email = $_GET["email"];

$sql = "INSERT INTO students (created_at, name, gender, email)
		VALUES (NOW(), '$fullname', '$gender', '$email')";

$conn->query($sql);

header('Location: contact.php') ;
?>
