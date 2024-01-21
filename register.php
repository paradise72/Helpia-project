<?php
include("connection.php");
if(isset($_POST["send"])){
    $fname=$_POST["fn"];
    $lname=$_POST["ln"];
    $pass=$_POST["pass"];
    $gen=$_POST["gender"];
    $email=$_POST["email"];
    $statu=$_POST["status"];
    $bdate=$_POST["date"];

    $que="INSERT INTO register (firstName,lastName,email,password,gender,StatusLevel,Birthdate) 
    VALUES ('$fname','$lname','$email','$pass','$gen','$statu','$bdate')";
    $store=mysqli_query($conn,$que);
}
header("location:new account.php");
echo'Helpia user account created sucessfully';
?>