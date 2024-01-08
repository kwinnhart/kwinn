<?php

$servername = "queenheart.infinityfreeapp.com";
$username = "if0_35745564";
$password = "2Bj0AFyANREBOq";
$dbname = "queenheart";

$conn = new mysqli($servername, $username, $password, $dbname);

IF ($conn->connect_error) {
    die("Connection failed: " .
    $conn->connect_error);

}
?>