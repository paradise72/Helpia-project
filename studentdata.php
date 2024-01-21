<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helpia database</title>
</head>
<body class="bg">

<style>
.bg{

background-color: violet;

}
.contain{
padding-top: 100px;
padding-left: 50px;
padding-right: 50px;

}
.welcome{
padding-top: 80px;
padding-left: 400px;
padding-right: 100px;

}

.dash{
   display: inline;
    padding-left: 600px;
    padding-bottom: 2px;
}
</style>

<div class="welcome">
    <a href="homestudent.php" class="dash">Back to HOME  </a>
 WELCOME TO STUDENTS DATABASE
</div>
<div class="contain"><?php
include("Connection.php");

                echo "<table border=1 width='100%'>
                <tr>
                <th>ID </th>
                <th>FIRSTNAME </th>
                <th>LASTNAME </th>
                <th>EMAIL </th>
                <th>STATUS</th>
                <th>GENDER</th>
                <th>BIRTH_DATE</th>
                <th>CREATED AT </th>
               
                <th colspan=3>ACTION </th>
                </tr>";

                $qer = "SELECT * FROM register WHERE StatusLevel='student'";
				$results = mysqli_query($conn, $qer);
                while($r= mysqli_fetch_array($results)){
                    echo "<tr>
                    <td>".$r['id']."</td>
                    <td>".$r['firstName']."</td>
                    <td>".$r['lastName']."</td>
                    <td>".$r['email']."</td>
                    <td>".$r['StatusLevel']."</td>
                    <td>".$r['gender']."</td>
                    <td>".$r['Birthdate']."</td>
                    <td>".$r['CreatedTime']."</td>";
                    
                    echo "
                    <td><a href='ViewUser.php?userId=$r[id]'> View </a></td>
                    <td><a href='EditUser.php?userId=$r[id]'> Edit </a></td>
                    <td><a href='DeactivateUser.php?userId=$r[id]'> Deactivate </a></td>
                    </tr>";
                }
                echo "</table>";
            
        ?>
        </div>
        </body>
</html>