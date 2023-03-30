<?php
$servername = "localhost";
$username = "root";
$password = "honeypot123";
$dbname = "honeypot_sensor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Escape user inputs for security
$mac_address = mysqli_real_escape_string($conn, $_POST['mac_address']);
$ip_address = mysqli_real_escape_string($conn, $_POST['ip_address']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

  // Insert user data into database
$sql = "INSERT INTO users (ip_address, mac_address, Names, id) VALUES ('$mac_address', '$ip_address', '$name', '$id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Failed";
}
}