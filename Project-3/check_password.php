<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Authentication</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Web_users";

$connection = mysqli_connect($servername, $username, $password, $database);
if(!$connection){
    die("Sorry ! The connection is faild");
}
if(isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST['password'];
    if($username != "namangupta78200@gmail.com"){
        // if($password == "naman78200"){
        //  header("Location: admin_page.php");
        // }
        // else{
        //     echo "Error";
        // }
        header("Location: username_error.php");
    }
    elseif($password != "naman78200"){
        // echo "Error";
        header("Location: password_error.php");
    }

    elseif($username != "namangupta78200@gmail.com"){
        if($password != "namangupta78200"){
            header("Location: both_error.php");
        }
    }
    else{
        header("Location: admin_page.php");
    }
}


?>
</body>
</html>