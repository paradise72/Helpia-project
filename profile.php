<?php
   require("connection.php");
?>
<html>
  <head>
     <title>helpia profile</title>
	 <style> 
		a {
		  color: black;
		  text-decoration: none !important;
		} 
        .prof{

            background-color: burlywood;
        }
	 </style>
  </head>
  
  <body class="prof">

  <table  class="menu" width="100%">
    <tr>
	   <td colspan="5" style="text-align:right; color:green;"> 
	   <a href="profile.php">Profile</a>
	   <br/>
	   <?php $login_session; ?></td>
	</tr>
  </table> 
	  <table border=0 height="80%" width="100%">
	    <tr><td><a href="homeadmin.php">Back To Home</a></td><td width="80%"rowspan="7" valign="top">
		   <h2><a href="users.php"> <img src="images/arrow.png" width="40" height="40"> </a>  User Profile</h2> 
		   <hr/>  
		   
		<?php  	
            $id = '$login_session';			
			 
		    $q = "SELECT * FROM register WHERE email= '$id'"; 
		     
			$results = mysqli_query($conn,$q);   
			if (!$results){
			   die("Something went wrong.".mysqli_error($conn));
			}
            if($row = mysqli_fetch_array($results)){
			 echo "<p style='margin-left:20px;'>";
			 echo "<b>First Name: </b>".$row['fname'];
			 echo "<br/>";
			 echo "<b>Last Name: </b>".$row['lname'];
			 echo "<br/>";
			 echo "<b>Email: </b>".$row['email'];
			 echo "<br/>";
			 echo "<b>Gender: </b>";
			 if($row['gender']== 1){
				 echo "Male";
			 }else{
				 echo "Female";
			 } 
			 echo "<br/>";
			echo "</p>";
			}			
		   ?> 
  </body>
</html> 