
<!DOCTYPE html>
<html>
    <head>
        <title>login helpia</title>
        <link rel="stylesheet" href="login.css">
    </head> 
    <body class="contain_all">
        <dev class="contain">
        <h4 class="welcom"><u><b>WELCOME TO HELPIA USER SESSIONS</b></u></h4>



        <form id="form2" class="form1" action="register.php" method="post">
            <h3>Create new account</h3><br><br>
        
            <input type="text" id="fn" name="fn" placeholder="Enter first name" required>
            <input type="text" id="ln" name="ln"placeholder="Enter last name" required><br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email account" required><br><br>
            <input type="radio" name="gender" value="male" id="male">Male<br>
            <input type="radio" name="gender" value="female" id="female">Female<br><br>
            <label for="day">Birt-date:</label><br>
            <input type="date" name="date" id="bdate"> <br><br>
           <labor for="status" required> Select your status:</labor><br>
                        <select id="status" name="status">
               <option value="Adminstrator"not selected> Administrator</option>
               <option value="Teacher"not selected> Teacher</option>
               <option value="Student"not selected> Student</option>
            </select><br><br>
            <input type="password" id="pass" name="pass" placeholder="Create password" required>
            <input type="password" id="cpass" name="cpass" placeholder="confirm password" ><br><br>
            <input type="submit" value="sign up" name="send">
         </form>

</section>
            </dev>

            <script src="script1.js"></script>
    </body>
</html>