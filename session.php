<?php
   include("connection.php");
   session_start();
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($conn,"SELECT email FROM register WHERE email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:dashboard.php");
      die();
   }
?>