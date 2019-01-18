<?php include 'dbcon.php';
session_start();
$email=$_POST['email'];
$psswd=$_POST["password"];


$Query="SELECT * FROM admin WHERE email='$email' AND password='$psswd' ";

$result=$con->query($Query);
$rowcount=mysqli_num_rows($result);
if($rowcount>0)
{
    $_SESSION["email"]=$email;
   header("Location:../../../cms_page/index.php ") ;
}
else
{
    echo "Access Deniedx";
}



?>