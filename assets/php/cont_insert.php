<?php
    include 'dbcon.php';

    $Sname=$_POST["name"];
    $Smail=$_POST["email"];
    $Ssubj=$_POST["subject"];
    $msg=$_POST["message"];


    $sql="INSERT INTO messages (user,email,subject,message) VALUES ('$Sname','$Smail','$Ssubj','$msg')";

    if(mysqli_query($con,$sql))
    {
        echo '<script language="javascript">';
        echo 'alert("We got your Message, Thank You!!!")';
        echo '</script>';
        header( "refresh:2;url=../../contact.php" );
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

   

    mysqli_close($con);
?>
