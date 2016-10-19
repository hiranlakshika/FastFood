<?php

include ("dbconnect.php");

$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["web"];
$message = $_POST["message"];

session_start();

$username = $_SESSION["uname"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sql = "insert into contactus (name,email,web,message) values ('$name','$email','$website','$message')";

    if ($conn->query($sql) === TRUE) {
        if ($username == NULL) {
            echo "<script type='text/javascript'>alert('Submitted successfully!'); "
            . "window.location.href='http://localhost/FastFood/contact.html';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Submitted successfully!'); "
            . "window.location.href='http://localhost/FastFood/logusercontact.php';</script>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "<script type='text/javascript'>alert('Email is invalid'); "
    . "window.location.href='http://localhost/FastFood/contact.html';</script>";
}
?>