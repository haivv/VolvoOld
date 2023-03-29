<?php
session_start();
require 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM platform ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"];
    $_SESSION['dem'] = $row["id"];
  }
} else {
  echo "0 results";
}
$conn->close();

?>
<a href="addtest.php">Add data</a>
