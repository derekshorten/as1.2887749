<?php
$id = $_GET["update"];
$name = $_GET["name"];
$gender = $_GET["gender"];
$email = $_GET["email"];

$sql = "UPDATE students SET 
		name = '$name', 
		gender = '$gender', 
		email = '$email'
		WHERE id = ".$id;

// echo $sql;
// exit();

$conn->query($sql);

header('Location: contact.php') ;
?>
