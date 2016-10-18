<?php

include ("dbconnect.php");

$uname = $_POST["user"];
$pass = sha1($_POST["pass"]);

$sql = "SELECT password FROM login WHERE username = '" . $uname . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if (!strcmp($pass, $row["password"])) {
            session_start();
            $_SESSION["uname"] = $uname;
            echo "<script type='text/javascript'>alert('Login Successfull!'); "
            . "window.location.href='http://localhost/FastFood/loguser.php';</script>";
            
        } else {
            echo "<script type='text/javascript'>alert('Wrong password!'); "
            . "window.location.href='http://localhost/FastFood/index.html';</script>";
        }
    }
} else {
    echo "<script type='text/javascript'>alert('User name not valid!'); "
    . "window.location.href='http://localhost/FastFood/index.html';</script>";
}
$conn->close();
?>