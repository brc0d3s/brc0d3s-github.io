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
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close database connection
$conn->close();
?>
