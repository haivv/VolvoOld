<?php
session_start();
if(isset($_SESSION["login"]))
{
    header('location: portal.php');
}
else{



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Addmin</title>
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/component.css">


</head>
<?php
// define variables and set to empty values
$user = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["user"])&&isset($_POST["pass"])){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        if($user=="admin"&&$pass=="123"){
            echo "OK";
            $_SESSION["login"]="ok";
            header('location: portal.php');
        }
        else{
            echo "fail";
        }
    }
}
?>

<body>
<div id="alllogin">
    <div class="container mt-3">

    <h1>관리자 페이지 Login</h1>

    <form action="" name="flogin" method="post" >
        <table class="table table-borderless" id="tableform" border="0">
        
            <tr>
                <td>Username</td>
                <td><input type="text" name="user"  placeholder="유저을 작성하세요" required></td>
                
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" placeholder="비밀을 작성하세요" required ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" name="submit" class="btn btn-primary mt-3" onclick="checkfile1()">Login</button></td>
            
            </tr>

        </table>
        </form>
    </div>
   
</div>
</body>
</html>
<?php
}
?>