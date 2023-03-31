<?php
session_start();
if(!isset($_SESSION["login"]))
{
    header('location: index.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Tracking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
  <div class="container mt-3">
    <h1>유저 트래킹 (log data 기록)</h1>
    <div class="container"><a href="portal.php" style='font-size:24px; text-decoration: underline;'>Portal <i class='fas fa-angle-double-left'></i></a> <a href="logout.php" style='font-size:24px; float:right; '>Logout <i class='fas fa-sign-out-alt'></i></a></div>
  <table class="table table-bordered table-hover mt-3">
    
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


$sql = "SELECT * FROM platform abs"; 
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

?>

    </tbody>
  </table>



  
  </div>
  <div class="container" align="center">
    <ul class="pagination">
        
     
            <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
        </ul>
  </div>














    
    <br>
    
  </body>
</html>
<?php

 $conn->close();
}
?>
