<! DOCTYPE>
<html>
<head>
    <title>student login</title>


    <link rel="stylesheet" href="login.css">
    </head> 
    <body class="contain_all">
        <dev class="contain">
        <h4 class="welcom"><u><b>WELCOME TO HELPIA LOGIN SESSIONS</b></u></h4>


<section>
        <form id="form1" class="form1" method="POST" action="">
                 <?php
   
    include('Connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $role=$_POST['status'];
        $Email = $_POST['email'];
        $Password = $_POST['pass'];

       
        $stmt = $conn->prepare("SELECT * FROM register WHERE StatusLevel=? AND email=? AND password=?");
        $stmt->bind_param("sss",$role, $Email, $Password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastame'];
            header("Location: homestudent.php");
            exit();
        } else {
            echo "Invalid email or invalid role or password. Please try again.";
        }
        $stmt->close();
    }

   
    ?>
         <header><h3>Login as student:</h3><br><br></header>
            <input type="text" name="fname" id="fn"placeholder="Enter first name" required>&nbsp;
            <input type="text" id="ln" name="lname" placeholder="Enter last name" required><br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email account" required>&nbsp;
            <input type="password" id="pass" name="pass"placeholder="Enter password" required ><br><br>
            <select id="status" name="status" required>
            <option value="11"not selected>Choose yourlevel</option>
               <option value="Adminstrator"not selected> Administrator</option>
               <option value="Teacher"not selected> Teacher</option>
               <option value="Student"not selected> Student</option> &nbsp;
            <input type="submit" id="login" onclick="login()" value="login" name="login"><br><br> OR
            <a href="#">forgot password</a><br><br>
        </form>
</section>

</body>
</html>