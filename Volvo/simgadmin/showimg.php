<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        #imgh{
            height: 70px;
        }
    </style>
</head>
<body>

<div class="container mt-3">
  <h2>관리자 페이지 - 콘텐츠 관리자 페이지</h2>
  <p>이미지 관리</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th> 사진 번호</th>
        <th>Zone</th>
        <th> 사진</th>
        <th>
            <a href="addimg.php">
                <span class="glyphicon glyphicon-plus-sign" style="font-size:32px;"></span> <!--edit-->
            </a>
        </th>
      </tr>
    </thead>
    <tbody>
    <?php
    require "config.php";
    $rows = mysqli_query($conn, "SELECT * FROM image");
      $num = 1;
    foreach($rows as $row) : 
    ?>

      <tr>
        <td><?php echo $num ?></td>
        <td><?php echo $row["zone"]; ?></td>
        <td><img src="<?php echo $row["image"]; ?>" id="imgh"></td>
        <td>
            <a href="addimg.php">
                <span class="glyphicon glyphicon-pencil" style="font-size:30px;"></span> 
            </a>
            &nbsp;
            <a href="#">
                <span class="glyphicon glyphicon-remove" style="font-size:32px;"></span>
            </a>  <!--remove-->


        </td>
      </tr>
        
      <?php $num +=1; endforeach; ?>
     
    </tbody>
  </table>
</div>

</body>
</html>
