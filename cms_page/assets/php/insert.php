<?php

        include_once "dbcon.php";
                
        date_default_timezone_set("Asia/Colombo");
        
        $Title=$_POST["title"];
        $Img=$_FILES['image']['name'];
        $Descript=$_POST["description"];
        $Auth=$_POST["author"];
        $Date_time=date('Y-m-d H:i:sa');
        $Categ=$_POST["categ"];
        
	
        $target="posts/".basename($Img);
        $con= mysqli_connect($server,$uname,$pw,$dbname);

         $sql="INSERT INTO posts (title,img,descript,auth,d_time,cat) VALUES ('$Title','$Img','$Descript','$Auth','$Date_time','$Categ')";
        $que=mysqli_query($con,$sql);
	
         
            if($que&&$target){
        
            echo '<script language="javascript">';
            echo 'alert("Post Inserted, Succesfully..!!")';
            echo '</script>';
            header( "refresh:2;url=../../create.php" );
         }
         else
         {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
        
        
     
         mysqli_close($con);
     ?>