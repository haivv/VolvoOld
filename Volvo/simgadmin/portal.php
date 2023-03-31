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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Addmin</title>
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/component.css">
    <script>
        function usertrack(){
            window.location.href = "usertrack.php"
        }
    </script>

</head>


<body>
<div id="allportal">
    <div class="container mt-3">

    

    <form action="" name="flogin" method="post" >
        <table class="table table-borderless" id="tableform" >
            <tr><td><h1 align="center">Volvo Portal</h1></td></tr>
        
            <tr>
                <td  align="center"><a href="usertrack.php" target="_blank" class="btn btn-primary " >User Tracking</a></td>
            </tr>
            
            <tr>
                <td  align="center"><a href="fview_lobby.php" target="_blank"  class="btn btn-primary " >Content Manager</button></td>
            
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