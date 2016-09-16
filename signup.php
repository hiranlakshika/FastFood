<?php

include ("dbconnect.php");

$signupName = $_POST["signupName"];
$signupPhone = $_POST["signupPhone"];
$signupEmail = $_POST["signupEmail"];
$signupPassword = sha1($_POST["signupPassword"]);

$sql = "insert into user (name,email,phone) values ('$signupName','$signupEmail','$signupPhone')";

if ($conn->query($sql) === TRUE) {

    $sql = "INSERT INTO login (username, password)VALUES ('$signupName','$signupPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Sign up successful!'); "
        . "window.location.href='http://localhost/FastFood/index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>