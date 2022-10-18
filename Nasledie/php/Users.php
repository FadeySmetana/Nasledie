<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ncomm";
// Create connection
$mysql = new mysqli($servername, $username, $password, $dbname);
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0){
  header('Location: /');
  exit();
}
header('Location: ../Admin.html');
$mysql->close();
?>
