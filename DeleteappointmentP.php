<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bestbeautysalon";
   $conn = mysqli_connect($servername, $username, $password,$dbname);



  // Check connection


  $A=$_POST['AppointmentID'];


  $sql= mysqli_query($conn, "DELETE  FROM appointment WHERE AppointmentID = '$A'; ");
  if  (!$sql){

  $_SESSION['delete']="<script> alert(' Fail to delete order' )</script>";
    header("Location: Deleteappointment.php");

}
  else{
    $_SESSION['delete']="<script> alert('Appointment deleted Successfully')</script>";
  header("Location: Deleteappointment.php");



  }
