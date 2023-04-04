<!DOCTYPE html>

<html lang="en" class="js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		
		
		
	    <link rel="stylesheet" type="text/css" href="css/component.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

		
      <script type="text/javascript" > 
            //check img
            function fileValidation() {
                var arr = event.target.files;//mảng các file được chọn
                var f = arr[0];
                console.log(f);
                var size = f.size;
                if(size > 5*1024 * 1024) {
                    alert("File 너무 커 ");
                    event.target.value="";
                }

            }
           


            function changedata(){
                for(var q=1;q<22;q++){
                    document.getElementById('hidfile'+q).innerHTML="";
                }
            }
            function del1(){
                document.getElementById('file16').innerHTML="";
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
                    
                    if(dem == 0)
                    {
                        window.location.href = "proAdd.php";
                    }
                    else
                    {
                        document.getElementById('showso').innerHTML="stay here";
                    }
                    
                }  
                
                document.fzone1.submit();

                
            }
                 

</script>
	
		<div class="container">

        <h2>사진 관리 페이지 - 사진 추가</h2>
        <p>사진</p>
        <div style="width:100%; overflow-y: croll;">

        <form method="post" action="proAdd.php" name="fzone1"> 
					

                       <table class="table table-hover">
      
                            <tbody>
                                <!-- Zone 1 -->
                                <tr>
                                    <td rowspan="15" style="width:10%">LOBBY</td>
                                    <td rowspan="4" style="width:15%">VR Zone</td>
                                    <td style="width:15%">사진 1</td>
                                    <td style="width:30%">
                                        <input type="file" name="file1" id="file1" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()"> 
                                        <label for="file1" ><span id="hidfile1"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file1"><strong ><div class="btnfile"> 파일 등록</div></strong></label>
                                        <span class="error" id ="img1err">* </span>
                                    </td>
                                </tr>
                                <tr>                                     
                                    <td>사진 2</td>
                                    <td>
                                        <input type="file" name="file2" id="file2" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()"> 
                                        <label for="file2" ><span id="hidfile2"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file2"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img2err">* </span>
                                    </td>
                                </tr>
                                <tr>                                     
                                    <td>사진 3</td>
                                    <td>
                                        <input type="file" name="file3" id="file3" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file3" ><span id="hidfile3"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file3"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img3err">* </span>
                                    </td>
                                </tr>
                                <tr>

                                    <td>영상 1</td>
                                    <td>
                                        <input type="text" name="file4" id="file4" class="video"  >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        <span class="error" id ="img4err">* </span>
                                    </td>
                                </tr>
                                <!-- Zone 2 -->
                                <tr>
                                    <td rowspan="3">MR Zone</td>
                                    <td>사진 4</td>
                                    <td>
                                        <input type="file" name="file5" id="file5" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file5" ><span id="hidfile4"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file5"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img5err">* </span>
                                    </td>
                                <tr>     
                                    <td>사진 5</td>
                                    <td>
                                        <input type="file" name="file6" id="file6" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()"> 
                                        <label for="file6" ><span id="hidfile5"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file6"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img6err">* </span>
                                    </td>


                                </tr>
                                <tr>
                                    <td>영상 2</td>
                                    <td>
                                        <input type="text" name="file7" id="file7" class="video"  accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        <span class="error" id ="img7err">* </span>
                                    </td>
                                </tr>
                                
                                
                                <!-- Zone 3 -->
                                <tr>
                                    <td rowspan="4">AR Zone</td>
                                    <td>사진 6</td>
                                    <td>
                                        <input type="file" name="file8" id="file8" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file8" ><span id="hidfile6"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file8"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img8err">* </span>
                                    </td>
                                <tr>     
                                    <td>사진 7</td>
                                    <td>
                                        <input type="file" name="file9" id="file9" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file9" ><span id="hidfile7"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file9"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img9err">* </span>
                                    </td>
                                </tr>
                                <tr>     
                                    <td>사진 8</td>
                                    <td>
                                        <input type="file" name="file10" id="file10" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file10" ><span id="hidfile8"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file10"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img10err">* </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>영상 3</td>
                                    <td>
                                        <input type="text" name="file11" id="file11" class="video" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        <span class="error" id ="img11err">* </span>
                                    </td>
                                </tr>
                                <!-- Zone 4 -->
                                <tr>
                                    <td rowspan="4">공통 Zone</td>
                                    <td>사진 9</td>
                                    <td>
                                        <input type="file" name="file12" id="file12" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png" onchange="return fileValidation()" > 
                                        <label for="file12" ><span id="hidfile9"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file12"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img12err">* </span>
                                    </td>
                                <tr>     
                                    <td>사진 10</td>
                                    <td>
                                        <input type="file" name="file13" id="file13" class="inputfile inputfile-6" accept=".jpg, .jpeg, .png, .bmp, .gif, .png"  onchange="return fileValidation()"> 
                                        <label for="file13" ><span id="hidfile10"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file13"><div class="btnfile"> 파일 등록</div></label>
                                        <span class="error" id ="img13err">* </span>
                                    </td>


                                </tr>
                                <tr>
                                    <td>영상 4</td>
                                    <td>
                                        <input type="text" name="file14" id="file14" class="video"   >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        <span class="error" id ="img14err">* </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>영상 5</td>
                                    <td>
                                        <input type="text" name="file15" id="file15" class="video"   >
                                    </td>
                                    <td>
                                        <div class="btnvideo"> 온라인 비디오 주소</div>
                                        <span class="error" id ="img15err">* </span>
                                    </td>
                                </tr>
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
                                        <input type="file" name="file16" id="file16" class="inputfile inputfile-6" accept=".3ds"  > 
                                        <label for="file16"><span id="hidfile11"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file16" id="nhan"><div class="btnfile"> 파일 등록</div></label>
                                        <div class="btndelete" id="btndel1" onclick="myFunction1()">삭제</div> 
                                        <span class="error" id ="img16err">*</span>
                                    </td>
                                </tr>
                                
                            


                                <tr>
                                
                                    <td>모델 2</td>
                                    <td>
                                        <input type="file" name="file17" id="file17" class="inputfile inputfile-6" accept=".3ds" > 
                                        <label for="file17" ><span id="hidfile12"></span> </label> 
                                        
                                    </td>
                                    <td>
                                        <label for="file17"><div class="btnfile"> 파일 등록</div></label>
                                        <div class="btndelete" onclick="myFunction2()">삭제</div> 
                                        <span class="error" id ="img17err">* </span>
                                    </td>
                                </tr>
                                <tr>
                                
                                    <td>모델 3</td>
                                    <td>
                                        <input type="file" name="file18" id="file18" class="inputfile inputfile-6" accept=".3ds"  > 
                                        <label for="file18"><span id="hidfile13" onclick="myFunction3()"></span> </label>
                                    </td>
                                    <td>
                                        <label for="file18"><div class="btnfile"> 파일 등록</div></label>
                                        <div class="btndelete" onclick="myFunction3();">삭제</div>
                                        <span class="error" id ="img18err">*</span>
                                    </td>
                                </tr>
                                <tr>

                                <td colspan="5" align="center">
                                    <button type="reset" class="btn btn-primary mt-3" onclick="changedata();">취소</button>
                                    <button type="button" class="btn btn-primary mt-3" onclick="checkfile1()">저장</button>

                                </td>

                                </tr>
                            </tbody>
                            </table>

        </form>

      </div>            
      <span id ="showso">* </span>                          
		<script src="js/custom-file-input.js"></script>
		


</body></html>