<?php


session_start();


$ClientID=$_POST['ClientID'];
$ServiceID=$_POST['ServiceID'];
$Discount=$_POST['Discount'];

$Date=date("Y/m/d");
$Status="Incomplete";
$Space=" ";
$AppointmentID= rand(1,1000);
$TimeCompleted;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestbeautysalon";
 $conn = mysqli_connect($servername, $username, $password,$dbname);





$sql=mysqli_query($conn, "INSERT INTO appointment
 Values ('$AppointmentID','$ClientID','$ServiceID',CURTIME(),'$Date','$Status','$DateCompleted','$TimeCompleted')");

if (!$sql)
{
    $_SESSION['delete']="<script> alert(' Fail to Add Appointmet')</script>";
die ('Error: '. mysqli_error($conn));
}
else
{
    $_SESSION['delete']="<script> alert(' Appointment Added Successfully ')</script>";
header("Location:Appointment.php");
}
mysqli_close($conn);
?>
