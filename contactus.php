<?php

include ("dbconnect.php");

$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["web"];
$message = $_POST["message"];

$sql = "insert into contactus (name,email,web,message) values ('$name','$email','$website','$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
    header('Location: http://localhost/FastFood/contact.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>