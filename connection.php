    <?php
$severname="localhost";
$firstName="root";
$lastName="";
$db_name="database1";
$conn= mysqli_connect($severname,$firstName,$lastName,$db_name );
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
else{echo("");}

?>