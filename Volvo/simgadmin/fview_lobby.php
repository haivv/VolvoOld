<?php
session_start();
if(!isset($_SESSION["login"]))
{
    header('location: index.php');
}
else{

?>
<!DOCTYPE html>

<html lang="en" class="js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


		
	    <link rel="stylesheet" type="text/css" href="css/component.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
      <script type="text/javascript" > 
            //check img
            function fileValidation() {
                var arr = event.target.files;//mảng các file được chọn
                var f = arr[0];
               // console.log(f);
                var size = f.size;
                if(size > 1024 * 1024) {
                    alert("File 너무 커 ");
                    event.target.value="";
                }

            }     

            //delete file value
            function changedata(){
                for(var q=1;q<22;q++){
                    document.getElementById('hidfile'+q).innerHTML="";
                }
                
            }
            function delete2(){
                document.getElementById("file4").value = "";
            }

            function del1(){
                document.getElementById('file16').innerHTML="";
            }
            //Delete text box value
            function deletevideoname() {
				document.getElementById("file4").value ="";
				document.getElementById("file7").value ="";
                document.getElementById("file11").value ="";
                document.getElementById("file14").value ="";
                document.getElementById("file15").value ="";
			}
            function checkfile1(){
                var dem=0;
                for(var q=1;q<22;q++){
                    if(document.getElementById('file'+q).value=="") {
                        document.getElementById('img'+q+'err').innerHTML="Required";
                        dem++;
                    }
                    else{
                        
                        document.getElementById('img'+q+'err').innerHTML="*";    
                    }   
                }
                return false;
            }

</script>
<?php
require 'config.php';
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Zone 1 -- VR Zone
   if($_FILES['file1']['name']==""){ //check select file or not
        $file_name1 = $_POST["fh_file1"];
   }
   else{
        $file_name1 = date("mdhiss_").$_FILES['file1']['name'];
        $file_tmp1 = $_FILES['file1']['tmp_name'];
        move_uploaded_file($file_tmp1, "fileupload/" . $file_name1);
   }
   ////----
   if($_FILES['file2']['name']==""){ //check select file or not
    $file_name2 = $_POST["fh_file2"];
    }
    else{
        $file_name2 = date("mdhiss_").$_FILES['file2']['name'];
        $file_tmp2 = $_FILES['file2']['tmp_name'];
        move_uploaded_file($file_tmp2, "fileupload/" . $file_name2);
    }
    //--------
    if($_FILES['file3']['name']==""){ //check select file or not
        $file_name3 = $_POST["fh_file3"];
    }
    else{
        $file_name3 = date("mdhiss_").$_FILES['file3']['name'];
        $file_tmp3 = $_FILES['file3']['tmp_name'];
        move_uploaded_file($file_tmp3, "fileupload/" . $file_name3);
    }
    
    if((!isset($_POST["file4"]))){
        $file_name4 =$_POST["fh_file4"];;
    }
    else{
        if($_POST["file4"]==""){
            $file_name4 = $_POST["fh_file4"];
        }
        else{
            $file_name4 = $_POST["file4"];
        }      
    }
    

     // Zone 2 MR Zone -----------------------------------------------
   if($_FILES['file5']['name']==""){ //check select file or not
        $file_name5 = $_POST["fh_file5"];
    }
    else{
        $file_name5 = date("mdhiss_").$_FILES['file5']['name'];
        $file_tmp5 = $_FILES['file5']['tmp_name'];
        move_uploaded_file($file_tmp5, "fileupload/" . $file_name5);
    }
    //----
    if($_FILES['file6']['name']==""){ //check select file or not
        $file_name6 = $_POST["fh_file6"];
    }
    else{
        $file_name6 = date("mdhiss_").$_FILES['file6']['name'];
        $file_tmp6 = $_FILES['file6']['tmp_name'];
        move_uploaded_file($file_tmp6, "fileupload/" . $file_name6);
    }
    //---
    if((!isset($_POST["file7"]))){
        $file_name7 =$_POST["fh_file7"];;
    }
    else{
        if($_POST["file7"]==""){
            $file_name7 = $_POST["fh_file7"];
        }
        else{
            $file_name7 = $_POST["file7"];
        } 
       
    }

    // Zone3 AR Zone -----------------------------------------------
   if($_FILES['file8']['name']==""){ //check select file or not
        $file_name8 = $_POST["fh_file8"];
    }
    else{
        $file_name8 = date("mdhiss_").$_FILES['file8']['name'];
        $file_tmp8 = $_FILES['file8']['tmp_name'];
        move_uploaded_file($file_tmp8, "fileupload/" . $file_name8);
    }
    //----
    if($_FILES['file9']['name']==""){ //check select file or not
        $file_name9 = $_POST["fh_file9"];
    }
    else{
        $file_name9 = date("mdhiss_").$_FILES['file9']['name'];
        $file_tmp9 = $_FILES['file9']['tmp_name'];
        move_uploaded_file($file_tmp9, "fileupload/" . $file_name9);
    }
    //----
    if($_FILES['file10']['name']==""){ //check select file or not
        $file_name10 = $_POST["fh_file10"];
    }
    else{
        $file_name10 = date("mdhiss_").$_FILES['file10']['name'];
        $file_tmp10= $_FILES['file10']['tmp_name'];
        move_uploaded_file($file_tmp10, "fileupload/" . $file_name10);
    }
    //---
    
    if((!isset($_POST["file11"]))){
        $file_name11 =$_POST["fh_file11"];;
    }
    else{
        if($_POST["file11"]==""){
            $file_name11 = $_POST["fh_file11"];
        }
        else{
            $file_name11 = $_POST["file11"];
        }
    
       
    }

     // Zone4  공통 Zone-----------------------------------------------
   if($_FILES['file12']['name']==""){ //check select file or not
        $file_name12 = $_POST["fh_file12"];
    }
    else{
        $file_name12 = date("mdhiss_").$_FILES['file12']['name'];
        $file_tmp12 = $_FILES['file12']['tmp_name'];
        move_uploaded_file($file_tmp12, "fileupload/" . $file_name12);
    }
    //----
    if($_FILES['file13']['name']==""){ //check select file or not
        $file_name13 = $_POST["fh_file13"];
    }
    else{
        $file_name13 = date("mdhiss_").$_FILES['file13']['name'];
        $file_tmp13 = $_FILES['file13']['tmp_name'];
        move_uploaded_file($file_tmp13, "fileupload/" . $file_name13);
    }
    //----
    
    if((!isset($_POST["file14"]))){
        $file_name14 =$_POST["fh_file14"];;
    }
    else{
        if($_POST["file14"]==""){
            $file_name14 = $_POST["fh_file14"];
        }
        else{
            $file_name14 = $_POST["file14"];
        }
    
       
    }



    if((!isset($_POST["file15"]))){
        $file_name15 =$_POST["fh_file15"];;
    }
    else{
        if($_POST["file15"]==""){
            $file_name15 = $_POST["fh_file15"];
        }
        else{
            $file_name15 = $_POST["file15"];
        }
    }

// ROOM  -----------------------------------------------
    if($_FILES['file16']['name']==""){ //check select file or not
        $file_name16 = $_POST["fh_file16"];
    }
    else{
        $file_name16 = date("mdhiss_").$_FILES['file16']['name'];
        $file_tmp16 = $_FILES['file16']['tmp_name'];
        move_uploaded_file($file_tmp16, "fileupload/" . $file_name16);
    }
    //----
    if($_FILES['file17']['name']==""){ //check select file or not
        $file_name17 = $_POST["fh_file17"];
    }
    else{
        $file_name17 = date("mdhiss_").$_FILES['file17']['name'];
        $file_tmp17 = $_FILES['file17']['tmp_name'];
        move_uploaded_file($file_tmp17, "fileupload/" . $file_name17);
    }
    //----
    if($_FILES['file18']['name']==""){ //check select file or not
        $file_name18 = $_POST["fh_file18"];
    }
    else{
        $file_name18 = date("mdhiss_").$_FILES['file18']['name'];
        $file_tmp18 = $_FILES['file18']['tmp_name'];
        move_uploaded_file($file_tmp18, "fileupload/" . $file_name18);
    }
    
    if(!isset($idlob)){
        $idlob = $_POST["getID"];;
    }
    
  
    // Upload database
  
    $sql = "UPDATE lobby SET vr_img1 = '$file_name1', vr_img2 = '$file_name2', vr_img3 = '$file_name3', vr_vid1 = '$file_name4', mr_img1 = '$file_name5', mr_img2 = '$file_name6', mr_vid1 = '$file_name7', ar_img1 = '$file_name8', ar_img2 = '$file_name9', ar_img3 = '$file_name10', ar_vid1 = '$file_name11', gon_img1 = '$file_name12', gon_img2 = '$file_name13', gon_vid1 = '$file_name14', gon_vid2 = '$file_name15', model1 = '$file_name16', model2 = '$file_name17', model3 = '$file_name18' WHERE id = '$idlob'";
    mysqli_query($conn, $sql);
}

?>  

<body>
	
		<div class="container">

        <h1>사진 관리 페이지 - 사진 추가</h1>
        <div class="container"><a href="portal.php" style='font-size:24px; text-decoration: underline;'>Portal <i class='fas fa-angle-double-left'></i></a> <a href="logout.php" style='font-size:24px; float:right; '>Logout <i class='fas fa-sign-out-alt'></i></a></div>
        <div style="width:100%; overflow-y: croll;">

        <form name="fzone1" method="post" enctype="multipart/form-data"> 
					

                       <table class="table table-hover">
      
                            <tbody>
                                <!-- Zone 1 -->

                                <?php

                                if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM lobby LIMIT 1";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    
                                    
                                ?>
                                    <input type="hidden" name="getID" value="<?php echo $row['id']; ?>">

                                <tr>
                                    <td rowspan="15" style="width:10%">LOBBY</td>
                                    <td rowspan="4" style="width:15%">VR Zone</td>
                                    <td style="width:15%">사진 1</td>
                                    <td style="width:30%">
                                        <input type="file" name="file1" id="file1" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()"> 
                                        <label for="file1" ><span id="hidfile1"><?php $str1= $row["vr_img1"]; $word1 = explode('_', $str1, 2); echo $word1[1];  ?></span> </label>
                                        <input type="hidden" name="fh_file1" value="<?php echo $row['vr_img1']; ?>">
                                    </td>
                                    <td>
                                        <label for="file1"><strong ><div class="btnfile"> 파일 등록</div></strong></label>
                                        
                                    </td>
                                </tr>
                                <tr>                                     
                                    <td>사진 2</td>
                                    <td>
                                        <input type="file" name="file2" id="file2" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()"> 
                                        <label for="file2" ><span id="hidfile2"><?php $str2= $row["vr_img2"]; $word2 = explode('_', $str2, 2); echo $word2[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file2" value="<?php echo $row['vr_img2']; ?>">
                                    </td>
                                    <td>
                                        <label for="file2"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>
                                </tr>
                                <tr>                                     
                                    <td>사진 3</td>
                                    <td>
                                        <input type="file" name="file3" id="file3" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file3" ><span id="hidfile3"><?php  $str3 = $row["vr_img3"]; $word3 = explode('_', $str3, 2); echo $word3[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file3" value="<?php echo $row['vr_img3']; ?>">
                                    </td>
                                    <td>
                                        <label for="file3"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>
                                </tr>
                                <tr>

                                    <td>영상 1</td>
                                    <td>
                                        <input type="text" name="file4" id="file4" class="video"  value="<?php echo $row['vr_vid1']; ?>" >
                                        <input type="hidden" name="fh_file4"  value="<?php echo $row['vr_vid1']; ?>" >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                       
                                    </td>
                                </tr>
                                <!-- Zone 2 MR Zone -->
                                <tr>
                                    <td rowspan="3">MR Zone</td>
                                    <td>사진 4</td>
                                    <td>
                                        <input type="file" name="file5" id="file5" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file5" ><span id="hidfile4"> <?php $str4 = $row['mr_img1']; $word4 = explode('_', $str4, 2); echo $word4[1]; ?> </span> </label>
                                        <input type="hidden" name="fh_file5" value="<?php echo $row['mr_img1']; ?>">
                                    </td>
                                    <td>
                                        <label for="file5"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>
                                <tr>     
                                    <td>사진 5</td>
                                    <td>
                                        <input type="file" name="file6" id="file6" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()"> 
                                        <label for="file6" ><span id="hidfile5"><?php $str5 = $row['mr_img2'];  $word5 = explode('_', $str5, 2); echo $word5[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file6" value="<?php echo $row['mr_img2']; ?>">
                                    </td>
                                    <td>
                                        <label for="file6"><div class="btnfile"> 파일 등록</div></label>
                                      
                                    </td>

                                </tr>
                                <tr>
                                    <td>영상 2</td>
                                    <td>
                                        <input type="text" name="file7" id="file7" class="video"   value="<?php echo $row['mr_vid1']; ?>" >
                                        <input type="hidden" name="fh_file7"   value="<?php echo $row['mr_vid1']; ?>" >
                                        
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        
                                    </td>
                                </tr>
                                
                                
                                <!-- zone3 AR Zone  -->
                                <tr>
                                    <td rowspan="4">AR Zone</td>
                                    <td>사진 6</td>
                                    <td>
                                        <input type="file" name="file8" id="file8" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file8" ><span id="hidfile6"><?php $str6 = $row['ar_img1']; $word6 = explode('_', $str6, 2); echo $word6[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file8" value="<?php echo $row['ar_img1']; ?>">
                                    </td>
                                    <td>
                                        <label for="file8"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>
                                <tr>     
                                    <td>사진 7</td>
                                    <td>
                                        <input type="file" name="file9" id="file9" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file9" ><span id="hidfile7"><?php  $str7 =  $row['ar_img2']; $word7 = explode('_', $str7, 2); echo $word7[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file9" value="<?php echo $row['ar_img2']; ?>">
                                    </td>
                                    <td>
                                        <label for="file9"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>
                                </tr>
                                <tr>     
                                    <td>사진 8</td>
                                    <td>
                                        <input type="file" name="file10" id="file10" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file10" ><span id="hidfile8"><?php $str8 = $row['ar_img3']; $word8 = explode('_', $str8, 2); echo $word8[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file10" value="<?php echo $row['ar_img3']; ?>">
                                    </td>
                                    <td>
                                        <label for="file10"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>영상 3</td>
                                    <td>
                                        <input type="text" name="file11" id="file11" class="video" value="<?php echo $row['ar_vid1']; ?>">
                                        <input type="hidden" name="fh_file11"   value="<?php echo $row['ar_vid1']; ?>" >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        
                                    </td>
                                </tr>
                                <!-- Zone 4 -->
                                <tr>
                                    <td rowspan="4">공통 Zone</td>
                                    <td>사진 9</td>
                                    <td>
                                        <input type="file" name="file12" id="file12" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file12" ><span id="hidfile9"><?php $str9 = $row['gon_img1'];  $word9 = explode('_', $str9, 2); echo $word9[1];?></span> </label>
                                        <input type="hidden" name="fh_file12" value="<?php echo $row['gon_img1']; ?>">
                                    </td>
                                    <td>
                                        <label for="file12"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>
                                <tr>     
                                    <td>사진 10</td>
                                    <td>
                                        <input type="file" name="file13" id="file13" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png"  onchange="return fileValidation()"> 
                                        <label for="file13" ><span id="hidfile10"><?php $str10 = $row['gon_img2']; $word10 = explode('_', $str10, 2); echo $word10[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file13" value="<?php echo $row['gon_img2']; ?>">
                                    </td>
                                    <td>
                                        <label for="file13"><div class="btnfile"> 파일 등록</div></label>
                                        
                                    </td>

                                </tr>
                                <tr>
                                    <td>영상 4</td>
                                    <td>
                                        <input type="text" name="file14" id="file14" class="video"  value="<?php echo $row['gon_vid1']; ?>" >
                                        <input type="hidden" name="fh_file14"   value="<?php echo $row['gon_vid1']; ?>" >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>영상 5</td>
                                    <td>
                                        <input type="text" name="file15" id="file15" class="video"   value="<?php echo $row['gon_vid2']; ?>">
                                        <input type="hidden" name="fh_file15"   value="<?php echo $row['gon_vid2']; ?>" >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        
                                    </td>
                                </tr>
                                
                                <!--   -->
                                <script>
                                    function myFunction1() {
                                        document.getElementById("hidfile11").innerHTML="";
                                    }
                                    function myFunction2() {
                                        document.getElementById("hidfile12").innerHTML="";
                                    }
                                    function myFunction3() {
                                        document.getElementById("hidfile13").innerHTML="";
                                    }
                                </script>

                                <tr>
                                    <td rowspan="3">ROOM</td>
                                    <td rowspan="3">Digital Show room</td>
                                    <td>모델 1</td>
                                    <td>
        
                                        <input type="file" name="file16" id="file16" class="inputfile inputfile-6" accept=".3ds, .fbx, .obj, .stl, .gltf"  onchange="return fileValidation()"> 
                                        <label for="file16" ><span id="hidfile11"><?php $str11 = $row['model1']; $word11 = explode('_', $str11, 2); echo $word11[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file16" value="<?php echo $row['model1']; ?>">

                                    </td>
                                    <td>
                                        <label for="file16"><div class="btnfile"> 파일 등록</div></label>

                                        <div class="btndelete" id="btndel1" onclick="myFunction1()">삭제</div> 
                                        
                                    </td>
                                </tr>


                                <tr>
                                
                                    <td>모델 2</td>
                                    <td>
                                        <input type="file" name="file17" id="file17" class="inputfile inputfile-6" accept=".3ds, .fbx, .obj, .stl, .gltf"  onchange="return fileValidation()"> 
                                        <label for="file17" ><span id="hidfile12"><?php $str12 = $row['model2']; $word12 = explode('_', $str12, 2); echo $word12[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file17" value="<?php echo $row['model2']; ?>">
                                        
                                    </td>
                                    <td>
                                        <label for="file17"><div class="btnfile"> 파일 등록</div></label>
                                        <div class="btndelete" onclick="myFunction2()">삭제</div> 
                                        
                                    </td>
                                </tr>
                                <tr>
                                
                                    <td>모델 3</td>
                                    <td>
                                        <input type="file" name="file18" id="file18" class="inputfile inputfile-6" accept=".3ds, .fbx, .obj, .stl, .gltf"  onchange="return fileValidation()"> 
                                        <label for="file17" ><span id="hidfile13"><?php $str13 = $row['model3']; $word13 = explode('_', $str13, 2); echo $word13[1]; ?></span> </label>
                                        <input type="hidden" name="fh_file18" value="<?php echo $row['model3']; ?>">
                                    </td>
                                    <td>
                                        <label for="file18"><div class="btnfile"> 파일 등록</div></label>
                                        <div class="btndelete" onclick="myFunction3();">삭제</div>
                                        
                                    </td>
                                </tr>
                                <?php

    

                                }
                                } else {
                                echo "0 results";
                                }
                                $conn->close();


                                ?>   

                                <tr>

                                <td colspan="5" align="center">

                                    <!-- <button class="btn btn-primary mt-3" onclick="changedata();delete2()">취소</button> -->
                                    <!-- <button class="btn btn-primary mt-3" onclick="delete2()">취소</button> -->
                                    <input type="button" class="btn btn-primary mt-3" onclick="deletevideoname();changedata()" value="취소">
                                    <button type="submit" name="submit" class="btn btn-primary mt-3" onclick="checkfile1()">저장</button>

                                </td>

                                </tr>
                                
                            </tbody>
                            </table>

        </form>

      </div>            
                             
		<script src="js/custom-file-input.js"></script>
		


</body>
</html>


<?php
}
?>