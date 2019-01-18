<?php
    include 'dbcon.php';

    $Sname=$_POST["name"];
    $Smail=$_POST["mail"];

    $sql="INSERT INTO subscribers (name,email) VALUES ('$Sname','$Smail')";

    if(mysqli_query($con,$sql))
    {
        echo '<script language="javascript">';
        echo 'alert("We got your message, Thank You..!!")';
        echo '</script>';
        header( "refresh:2;url=../../index.php" );
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

   

    mysqli_close($con);
?>
