<?php
session_start();
$_SESSION['lastid'];
if(isset($_SESSION["lastid"]))
{
    $idVisitor = $_SESSION["lastid"]+1;
    date_default_timezone_set("Asia/Seoul");
    $timeOut = date("Y-m-d h:i:sa");

    echo "idVisitor: ".$idVisitor."<br>";
    echo "time out: ".$timeOut;

    require 'config.php';
    
    
    // $query = "UPDATE platform SET logouttime='$timeOut' WHERE id='$idVisitor'";
    // mysqli_query($conn, $query);


    $conn = new mysqli($servername, $username, $password, $dbname);
   
 

    $sql = "UPDATE platform SET logouttime='$timeOut' WHERE id='$idVisitor'";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    
    session_destroy();
    
}
$conn->close();

header('location: index.php');
?>
