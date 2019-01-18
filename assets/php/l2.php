<?php
      include "dbcon.php";
      $con= mysqli_connect($server,$uname,$pw,$dbname);
      $ql="SELECT * FROM posts  where cat='Lifestyle' ORDER BY ID DESC LIMIT 1 offset 1"; 
      $result=mysqli_query($con,$ql);
      

        $row= mysqli_fetch_assoc($result);
?>