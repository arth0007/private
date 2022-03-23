<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dhruvin_pennydrop";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysli_connect_error());
}
?>