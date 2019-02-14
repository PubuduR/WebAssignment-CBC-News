<?php
    include 'dbcon.php';

    $Sname=$_POST["fname"];
    $Smail=$_POST["email"];
    $Spwd=$_POST["password"];
    


    $sql="INSERT INTO users (email,pws,name) VALUES ('$Smail','$Spwd','$Sname')";

    if(mysqli_query($con,$sql))
    {
        echo '<script language="javascript">';
        echo 'alert("We have recieved your details, Thank You!!!")';
        echo '</script>';
        header( "refresh:2;url=../../../index.php" );
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

   

    mysqli_close($con);
?>
