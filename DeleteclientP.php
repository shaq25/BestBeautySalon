<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bestbeautysalon";
   $conn = mysqli_connect($servername, $username, $password,$dbname);



  // Check connection


  $A=$_POST['ClientID'];


  $sql= mysqli_query($conn, "DELETE  FROM client WHERE ClientID = '$A'; ");
  if  (!$sql){

  $_SESSION['delete']="<script> alert(' Fail to delete Cleint' )</script>";
    header("Location: deleteClient.php");

}
  else{
    $_SESSION['delete']="<script> alert('Client deleted Successfully')</script>";
  header("Location:deleteClient.php");



  }
