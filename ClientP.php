<?php


session_start();


$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$DOB=$_POST['DOB'];
$Telephone=$_POST['Telephone'];
$EmailAddress=$_POST['EmailAddress'];
$MedicalProblem=$_POST['MedicalProblem'];

$space="_";

$ClientID =$Firstname.$space.$Lastname;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestbeautysalon";
 $conn = mysqli_connect($servername, $username, $password,$dbname);


$ordernumber=$CustomerID.date("Ymd");
$Order_ready="no";



$sql=mysqli_query($conn, "INSERT INTO client
 Values ('$ClientID','$Firstname','$Lastname','$DOB','$Telephone','$MedicalProblem','$EmailAddress')");

if (!$sql)
{
    $_SESSION['delete']="<script> alert(' Fail to add client ')</script>";
die ('Error: '. mysqli_error($conn));
}
else
{
      $_SESSION['delete']="<script> alert(' Client was added successfully  ')</script>";
header("Location:Client.php");
}
mysqli_close($conn);
?>
