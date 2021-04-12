<?php


session_start();
/* $Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Department=$_POST['Department'];
$Date=date("Y/m/d");
$TimeIn=CURTIME();
$Status="Active";
$TimeOut=CURTIME();
*/

$ID=$_POST['ID'];
$Service=$_POST['Service'];
$Price=$_POST['Price'];
$space="_";
$ServiceID=$ID.$space.$Service;



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestbeautysalon";
 $conn = mysqli_connect($servername, $username, $password,$dbname);

$sql=mysqli_query($conn, "INSERT INTO service
 Values ('$ServiceID','$Service','$Price')");

if (!$sql)
{
    $_SESSION['delete']="<script> alert(' fail to add service ')</script>";
die ('Error: '. mysqli_error($conn));
}
else
{
    $_SESSION['delete']="<script> alert('Service was successfully Added')</script>";
header("Location:Service.php");
}
mysqli_close($conn);
?>
