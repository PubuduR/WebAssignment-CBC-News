<?php
            
              include_once "dbcon.php";
              $con= mysqli_connect($server,$uname,$pw,$dbname);
              $ql="SELECT * FROM posts  where cat='Business' ORDER BY ID"; 
              $result=mysqli_query($con,$ql);
              $resultCheck = mysqli_num_rows($result);

             if($resultCheck > 0) {
              
              while($res = mysqli_fetch_assoc($result)) { 		
                echo"<br>";
                echo "<div class=container>";
                echo "<div class=row>";
                  echo " <div class=col-lg-12 mb-4>";
                   echo " <div class=card h-100>";
                
                   
                      echo "<img src='".$res['img']."' width='460' height='300'/>";
                      echo "<h4 class=card-header>".$res['title']."</h4>";
                            echo "<div class=card-body>";
                            echo "<p class=card-text>".$res['descript']."</p>";
                            echo "</div>";
                      echo "<div class=card-footer>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
                echo "</div>"; 
                echo "</br>";
                
             
              }
              }
              
            
              ?>

