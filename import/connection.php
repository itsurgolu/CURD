<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "student-registration";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
  die("Server not connected" . mysqli_connect_error());

}

?>
