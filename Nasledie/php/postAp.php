<?php

$Analog = $_POST['nalog'];
$Asot = $_POST['sot'];
$Aphone = $_POST['tel'];

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

$sql = "INSERT INTO application (nalog, sot, phone)
VALUES ('$Analog', '$Asot', '$Aphone')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Данные успешно отправлены')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>