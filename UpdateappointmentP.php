<?php
  session_start();
  $servername = "localhost";
  $name = "root";
  $password = "";
  $dbname = "bestbeautysalon";

  // Create connection
  $conn = mysqli_connect($servername, $name, $password, $dbname);
  // Check connection

$Date=date("Y/m/d");

  $Order=$_POST['Orders'];


  $query=mysqli_query($conn, "UPDATE appointment SET Status='Completed', DateCompleted='$Date', TimeCompleted=CURTIME() WHERE ClientID = '$Order'; ");
  if  (!$query){
    $_SESSION['delete']="<script> alert(' Fail to Update Client')</script>";
    echo"<script> location.href='Updateappointment.php'</script>";
  }
  else{
  $_SESSION['delete']="<script> alert('Appointment updated Successfully ')</script>";
header("Location:Updateappointment.php") ;

}
