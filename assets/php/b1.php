<?php
      include "dbcon.php";
      $con= mysqli_connect($server,$uname,$pw,$dbname);
      $ql="SELECT * FROM posts WHERE cat='Business'  ORDER BY ID DESC LIMIT 1"; 
      $result=mysqli_query($con,$ql);
     #echo ($result);
     $row=mysqli_fetch_assoc($result);

?>