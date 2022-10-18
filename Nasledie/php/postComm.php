<?php

$named = $_POST['name'];
$mail = $_POST['email'];
$com = $_POST['com'];
$comm = $_POST['comm'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ncomm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO comments (name, email, com, comm)
VALUES ('$named', '$mail', '$com', '$comm')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Данные успешно отправлены')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: /');
$conn->close();
?>