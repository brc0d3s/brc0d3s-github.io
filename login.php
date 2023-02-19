<?php
// establish database connection
$dbhost = 'localhost';
$dbname = 'your_database_name';
$dbuser = 'your_database_username';
$dbpass = 'your_database_password';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// process form submission
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful";
} else {
    echo "Invalid email or password";
}

// close database connection
$conn->close();
?>
