<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data User Tracking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
  <div class="container mt-3">
    <h1>유저 트래킹 (log data 기록)</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th> Id</th>
        <th>IP</th>
        <th> 플랫폼</th>
        <th> 접속 일시</th>
        <th> 로르아웃 일시</th>
      </tr>
    </thead>
    <tbody>
      <?php

require 'config.php';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM platform ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
    <tr>
          <td>Visitor <?php echo $row["id"]; ?></td>
          <td><?php echo $row["ip"]; ?></td>
          <td><?php echo $row["platform"]; ?></td>
          <td><?php echo $row["logintime"]; ?></td>
          <td><?php echo $row["logouttime"]; ?></td>
    </tr>
<?php

  }
} else {
  echo "0 results";
}
$conn->close();

?>
       
      </tbody>
  </table>
  
  </div>
    
  </body>
</html>
