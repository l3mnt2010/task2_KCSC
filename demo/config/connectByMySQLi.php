<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "task2_kcsc";

$conn = new MySQLi($host, $user, $pass, $db_name);
if ($conn->connect_error) {
   die("Error connecting to");
} else {
}