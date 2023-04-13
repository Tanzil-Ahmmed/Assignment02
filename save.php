<?php

$name = $_POST["Name"];
$email = $_POST["email"];
$message = $_POST["Message"];
$conn = mysqli_connect("localhost", "root", "", "database_form")or die("connection failed");
$sql = "INSERT INTO database_table(Name,Email,Feedback) VALUES ('{$name}','{$email}','{$message}' )";
$result = mysqli_query ($conn, $sql) or die ("Query Failed!");
header("location: http:http://localhost/data%20form/contact.php");
mysqli_close($conn);
?>