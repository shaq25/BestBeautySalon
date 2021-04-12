<?php
session_start();

$adminpassword="bestbeautysalon";
$uname="Admin_user1@";
$name= "Admin";

//checks for the admin login
if ($adminpassword==$_POST["password"]&& $uname==$_POST["username"])
{
          $_SESSION['adminlogin'] = "yes";
          $rowData= $result->fetch_assoc();
          $_SESSION['name']= $rowData['Firstname'];
           header("Location:book-table.php");

		  exit();
}


?>



<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestbeautysalon";
 $conn = mysqli_connect($servername, $username, $password,$dbname);



if(isset($_POST['username']))
{
  $uname=$_POST['username'];
  $pword=$_POST['password'];
  $rowData;



    $result= mysqli_query($conn, "Select * from login WHERE  userID='$uname'  and Password='$pword'");

}

  if (mysqli_num_rows($result)==1)
  {
    	$rowData= $result->fetch_assoc();
      $_SESSION['User']= $rowData['Firstname'];
    $_SESSION['adminlogin'] = "yes";

     header ("Location:Home.php");



  }
  else
  {

     $_SESSION['msg']="Login Failed. Try new Username & Password";
     header('Location:index.php');

  }


    ?>
