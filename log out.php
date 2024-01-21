<?php
   include("connection.php");
   session_start();
   $error = "";
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
      $lastname = mysqli_real_escape_string($conn,$_POST['lname']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT * FROM register WHERE firstname = ?,lastname=?, email=? and password = ?";
      $result = mysqli_query($conn,$sql);
	  if(!$result){
		  die("Wrong.".mysqli_error($conn));
	  }
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $status = $row['status'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start();
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login helpia</title>
        <link rel="stylesheet" href="login.css">
    </head> 
    <body class="contain_all">
        <dev class="contain">
        <h2 class="welcom">welocme to helpia Login session</h2>
        <form id="form1" class="form1" method="POST" action="dashboard.php">
            <input type="text" name="fname" id="fn"placeholder="Enter first name" required>&nbsp;
            <input type="text" id="ln" name="lname" placeholder="Enter last name" required><br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email account" required>&nbsp;
            <input type="password" id="pass" name="pass"placeholder="Enter password" required ><br><br><br>
            <input type="submit" id="login" onclick="login()" value="login" name="login"><br><br> OR
            <a href="#">forgot password</a><br><br>
        </form>
        <form id="form2" class="form1" action="register.php" method="post">
            create new account<br><br>
        
            <input type="text" id="fn" name="fn" placeholder="Enter first name" required>
            <input type="text" id="ln" name="ln"placeholder="Enter last name" required><br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email account" required><br><br>
            <input type="radio" name="gender" value="male" id="male">Male<br>
            <input type="radio" name="gender" value="female" id="female">Female<br><br>
            <input type="password" id="pass" name="pass" placeholder="Create password" required>
            <input type="password" id="cpass" name="cpass" placeholder="confirm password" ><br><br>
            <input type="submit" value="sign up" name="send">
         </form>
            </dev>
            <script src="script1.js"></script>
    </body>
</html>