<?php

$Unamed = $_POST['USname'];
$Umail = $_POST['USemail'];
$Uphone = $_POST['USphone'];

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

$sql = "INSERT INTO uslugi (name, email, phone)
VALUES ('$Unamed', '$Umail', '$Uphone')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Данные успешно отправлены')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>