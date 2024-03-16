<?php

$name = $_POST["name"];
$email = $_POST['Email'];
$Phone = $_POST['phone'];

echo "<h1>Thank You " .$name." For Giving Me a essential Time My Team is Contect With you below 24 hours.</h1>";

echo "Have a Good Day !";

$servername = "localhost";
$username = "root";
$password = "";
$database = "Web_users";

$connection = mysqli_connect($servername, $username, $password, $database);

if($connection){
    echo "<br> Connected";
}
else{
    echo "Not Connected";
}

// $sql = "CREATE DATABASE Web_users";
// $useQ = mysqli_query($connection, $sql);

// if($useQ){
//     echo "<br> Database Created";
// }
// else{
//     echo "Database Not Created";
// }


// $sql1 = "CREATE TABLE Users ( Name varchar(20), Email varchar(50) , Phone INT)";
// $useQ1 = mysqli_query($connection, $sql1);

// if($useQ1){
//     echo "<br> Table Created";
// }
// else{
//     echo " Table Not Created";
// }


$sql2 = "INSERT INTO Users( Name, Email, Phone) VALUES ('$name', '$email', '$Phone')";
$useQ2 = mysqli_query($connection, $sql2);

// if($useQ2){
//     echo "<br> Data Inserted";
// }
// else{
//     echo "Data Not Inserted";
// }


?>