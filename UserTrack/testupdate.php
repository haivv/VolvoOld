<?php
require 'config.php';
    
    
// $query = "UPDATE platform SET logouttime='$timeOut' WHERE id='$idVisitor'";
// mysqli_query($conn, $query);


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE platform SET logouttime='gjjj' WHERE id='85'";

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}
?>