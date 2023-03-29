<?php
session_start();

require 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql1 = "SELECT id FROM platform ORDER BY id DESC LIMIT 1";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    

    if($row1["id"]==$_SESSION['dem'])
    {
            $sql = "INSERT INTO platform 
            VALUES ('', 'John', 'Doe', 'john@example.com','')";
                if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
                
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
         

    }


    
  }
} else {
  echo "0 results";
}






$conn->close();
?>