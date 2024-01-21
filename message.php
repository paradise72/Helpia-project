<?php
include("connection.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $rol=$_POST["role"];
    $message=$_POST["message"];

$sql = "INSERT INTO user_message (userName,userEmail,useRole,message) VALUES ('$name','$email','$rol','$message')";
$store = mysqli_query($conn,$sql);
}
header("");
?>