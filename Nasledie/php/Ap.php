<?php
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

if (isset($_GET["Adel"])) {
  $id = $_GET["Adel"];
  $sql = "DELETE FROM application WHERE id=$id";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

$sql = "SELECT * FROM application";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table id='mytable'>
          <thead>
            <tr role='row' style='border-bottom: 1px solid white'>
              <th>id</th>
              <th>Имя</th>
              <th>Эл.почта</th>
              <th>Телефон</th>
            </tr>
          </thead>
          <tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr class='TR'><td>" .$row["id"]."</td><td>". $row["nalog"]."</td><td>".$row["sot"]."</td><td>".$row["phone"]."</td><td style='border: none'><a style='text-decoration: none'  href='?Adel=$row[id]'>X</a></td></tr>";
  }
  echo "<tbody></table>";
} else {
  echo "0 results";
}
$conn->close();
?>