<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bestbeautysalon";
   $conn = mysqli_connect($servername, $username, $password,$dbname);



  // Check connection


  $A=$_POST['ServiceID'];


  $sql= mysqli_query($conn, "DELETE  FROM service WHERE ServiceID = '$A'; ");
  if  (!$sql){

  $_SESSION['delete']="<script> alert(' Fail to delete Service' )</script>";
    header("Location: deleteservice.php");

}
  else{
    $_SESSION['delete']="<script> alert('Service deleted Successfully')</script>";
  header("Location: deleteservice.php");



  }
