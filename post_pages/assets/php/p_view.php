<?php
            
              include_once "dbcon.php";
              $con= mysqli_connect($server,$uname,$pw,$dbname);
              $ql="SELECT * FROM posts  where cat='Political' ORDER BY ID"; 
              $result=mysqli_query($con,$ql);
              $resultCheck = mysqli_num_rows($result);

             if($resultCheck > 0) {
              
                while ($row= mysqli_fetch_assoc($result))
                {
                 
                  echo "<h2'>";
                  echo   $row['title'];
                  echo "</h2>";

                  echo "<h5>";
                  echo $row['descript'];
                  echo "</h5>";

                  echo"<div id='fakeimg'>"; 
                  echo "<img src='".$row['img']."' >";
                  echo "</div>";
              
              }
              }
              
            
              ?>
