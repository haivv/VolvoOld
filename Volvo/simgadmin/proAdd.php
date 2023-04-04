<?php
$vr_img1 = $_POST["file1"];
$vr_img2 = $_POST["file2"];
$vr_img3 = $_POST["file3"];
$vr_vid1 = $_POST["file4"];

$mr_img1 = $_POST["file5"];
$mr_img2 = $_POST["file6"];
$mr_vid1 = $_POST["file7"];

$ar_img1 = $_POST["file8"];
$ar_img2 = $_POST["file9"];
$ar_img3 = $_POST["file10"];
$ar_vid1 = $_POST["file11"];


$gon_img1 = $_POST["file12"];
$gon_img2 = $_POST["file13"];
$gon_vid1 = $_POST["file14"];
$gon_vid2 = $_POST["file15"];

$room_mod1 = $_POST["file16"];
$room_mod2 = $_POST["file17"];
$room_mod3 = $_POST["file18"];

require 'config.php';

$query = "INSERT INTO lobby VALUES ('', '$vr_img1', '$vr_img2', '$vr_img3', '$vr_vid1', '$mr_img1', '$mr_img2', '$mr_vid1', '$ar_img1', '$ar_img2', '$ar_img3', '$ar_vid1', '$gon_img1', '$gon_img2', '$gon_vid1', '$gon_vid2')";
mysqli_query($conn, $query);
?>