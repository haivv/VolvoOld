<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website</title>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> 
    </script>
  </head>
  <body>
    
    <script type="text/javascript">
      $.getJSON('http://ip-api.com/json', function(ip){
        var data = {
          ip: ip.query,
          isp: ip.isp,
          country: ip.country,
          city: ip.regionName
        };

        $.ajax({
          url: 'adddata.php',
          type: 'post',
          data: data
        })
      })
    </script>
  </body>
</html>
<?php
//check device
function isMobileDevice() {
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
, $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
  $device = "Mobile Browser Detected";
}
else {
  $device = "using desktop";
}
 

//check ip, time
require 'config.php';
if(isset($_POST["ip"])){
  $ip = $_POST["ip"];
 

  date_default_timezone_set("Asia/Seoul");
    $timeIn = date("Y-m-d h:i:sa");
 
  $timeOut = "";




  




 


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
      
      $lastid = $_SESSION['lastid'];
      
      if($row1["id"]==$lastid) //check 
      {



                $sql = "INSERT INTO platform VALUES('', '$ip', '$device', '$timeIn', '$timeOut')";
                
                if ($conn->query($sql) === TRUE) {
                  
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
  

              }


    
        }
      } else {
        echo "0 results";
      }
          

  $conn->close();


}


 

?>
<a href='logout.php'>Logout</a>
