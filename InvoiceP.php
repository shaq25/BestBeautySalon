<?php


session_start();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestbeautysalon";
 $conn = mysqli_connect($servername, $username, $password,$dbname);


 $InvoiceNum=$_POST['InvoiceNum'];
 $Service=$_POST['Service'];
 $Price=$_POST['Price'];
 $PaymentMethod=$_POST['PaymentMethod'];
 $Discount=$_POST['Discount'];

 $PBDiscount= $Discount * $Price/100;
 $PADiscount= $Price-$PBDiscount;
 $Price = $PADiscount;


$sql=mysqli_query($conn, "INSERT INTO invoice
 Values (' $InvoiceNum','$Service',' $Price',' $PaymentMethod',' $Discount')");

if (!$sql)
{
    $_SESSION['delete']="<script> alert(' Invocies fail to add ')</script>";
die ('Error: '. mysqli_error($conn));
}
else
{
  $_SESSION['delete']="<script> alert(' Invocies was successfully added ')</script>";
header("Location:invoice.php");
}
mysqli_close($conn);
?>
