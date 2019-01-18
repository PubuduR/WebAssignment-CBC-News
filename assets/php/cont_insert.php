<?php
    include 'dbcon.php';

    $Sname=$_POST["name"];
    $Smail=$_POST["email"];
    $Ssubj=$_POST["subject"];
    $msg=$_POST["message"];


    $sql="INSERT INTO contact (name,email,subj,msg) VALUES ('$Sname','$Smail','$Ssubj','$msg')";

    if(mysqli_query($con,$sql))
    {
        echo '<script language="javascript">';
        echo 'alert("Subscribed Succesfuly")';
        echo '</script>';
        header( "refresh:2;url=../../contact.php" );
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

   

    mysqli_close($con);
?>
