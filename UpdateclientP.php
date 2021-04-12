<?php
  session_start();
  $servername = "localhost";
  $name = "root";
  $password = "";
  $dbname = "bestbeautysalon";

  // Create connection
  $conn = mysqli_connect($servername, $name, $password, $dbname);
  // Check connection

$ClientID=$_POST['ClientID'];
$Telephone=$_POST['Telephone'];
$EmailAddress=$_POST['EmailAddress'];


  $query=mysqli_query($conn, "UPDATE client SET Telephone='$Telephone', EmailAddress='$EmailAddress' WHERE ClientID= '$ClientID'; ");
  if  (!$query){
    $_SESSION['delete']="<script> alert(' Fail to Update Client')</script>";
    echo"<script> location.href='UpdateClient2.php'</script>";
  }
  else{
  $_SESSION['delete']="<script> alert('Client informaation updated Successfully ')</script>";
header("Location:UpdateClient2.php") ;

}
