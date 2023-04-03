<?php
  session_start();
  // print $_SESSION['visitor'];

  if( isset($_SESSION['counter'] ) ) {

    $_SESSION['counter'] += 1;

 }else {
    $_SESSION['counter'] = 1;
 }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website</title>
  
  </head>
  <body>
    
    <a href="logout.php">Logout</a>

    
  </body>
</html>
<?php
require 'config.php';

echo $_SESSION['counter'];
if($_SESSION['counter']==1){
  
  header('location: adddata.php');
    
}
else{
  // echo "dung";
  
}




?>
