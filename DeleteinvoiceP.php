<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bestbeautysalon";
   $conn = mysqli_connect($servername, $username, $password,$dbname);



  // Check connection


  $oNum=$_POST['InvoiceNum'];


  $sql= mysqli_query($conn, "DELETE FROM invoice WHERE InvoiceNum = '$oNum'; ");
  if  (!$sql){

  $_SESSION['delete']="<script> alert(' Fail to delete Invocie')</script>";
    header("Location: deleteinvoice.php");

}
  else{
  $_SESSION['delete']="<script> alert('Successfully deleted Invoice')</script>";
  header("Location: deleteinvoice.php");



  }
