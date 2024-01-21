<!DOCTYPE html>
<html>
    <head>
        <title>helpia learning</title>
    </head>

<?php
require("connection.php");
?>
    <body class="contain_all">
    <style>
.contain_all{
    background-color: wheat;
}
.contain{
background-color:rgb(242, 139, 189) ;
height: 600px;
width: 700px;
padding-left: 100px;
padding-right: 100px;
}
.sign{

    margin-left: 5px;
    padding-top:10px;
    padding-bottom:10px;
    padding-left:5px;
    padding-right:20px;
    background-color: rgba(191, 188, 17, 0.58);
    border-width: 1px;
    border-radius:2px;
    cursor:pointer;
    
    
}
.welcome{
padding-top: 50px;
padding-left: 100px;
padding-right: 100px;
}
.contain{
 
 height: 600px;
 width: 800px;
 padding-left: 200px;
 padding-right: 200px;
 }
</style>

<p><div class="contain">
<p class="welcome"><h1>Welcome to helpia</h1></p><br>
This is mobile and web application that help kids for nursery and primary  school to learn basic knouledge 
about Kinyarwanda and English languages.</p>
<p class="welcome"><h1>Our mission as helpia</h1></p><br>
<p>Our mission is to assist those kids to learn basic skills and knouledge for Kinyarwanda and English language through fun learning by drawings, images and video cartoons</p>

<a href="new account.php"> <button class="sign">NEW USER</button> &nbsp;&nbsp;&nbsp;
</a>
<a href="signin admin.php"> <button class="sign">Sign as administrator </button>&nbsp;&nbsp;&nbsp;
</a>

<a href="signin teacher.php"> <button class="sign">sign in as teacher </button>&nbsp;&nbsp;&nbsp;
</a>

<a href="signin as student.php"> <button class="sign">Sign as student  </button>
</a>
        </div>

    </body>
</html>