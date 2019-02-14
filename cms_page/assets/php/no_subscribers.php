<?php
            
              include_once "dbcon.php";
              $con= mysqli_connect($server,$uname,$pw,$dbname);
              $ql="SELECT count(1) from subscribers"; 
              $result=mysqli_query($con,$ql);
              

             
              
              $res = mysqli_fetch_array($result);		
              $total = $res[0];
              echo "<h3>". $total."</h3>";

            
              mysqli_close($con);
                
             
              
              
              
            
              ?>