<?php

        include_once "dbcon.php";
                
        $rec=$_POST["post_del"];
    
	

        $con= mysqli_connect($server,$uname,$pw,$dbname);

         $sql="DELETE FROM posts WHERE title='$rec'";

	
	
         if(mysqli_query($con,$sql))
         {
            echo '<script language="javascript">';
            echo 'alert("Post Deleted Succesfully")';
            echo '</script>';
            header( "refresh:2;url=../../delete.php" );
         }
        
         else
         {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
     
        
     
         mysqli_close($con);

         
     ?>