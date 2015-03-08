<?php
$fullname = $_GET["fullname"];
$gender = $_GET["gender"];
$email = $_GET["email"];

$sql = "INSERT INTO contacts (created_at, fullname, gender, email)
		VALUES (NOW(), '$fullname', '$gender', '$email')";

$conn->query($sql);

header('Location: contact.php') ;
?>
