<?php

include ("dbconnect.php");

$signupName = $_POST["signupName"];
$signupPhone = $_POST["signupPhone"];
$signupEmail = $_POST["signupEmail"];
$signupPassword = sha1($_POST["signupPassword"]);


?>