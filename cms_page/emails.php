<!DOCTYPE html>
<html>
<head>
<style>
   
  
   
   
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(21, 47, 71);
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: rgb(44, 5, 5)
}
</style>
</head>
<body background="im2.jpeg">

<ul>
  <li><a class="active" href="#home">Myadmin</a></li>
  <li><a href="#index.html">Dashboard</a></li>
  

  <li style="float:right"><a class="login.html" href="index.html">Logout</a></li>
</ul>
<style>
  * {
    box-sizing: border-box;
  }
  
  .box {
    float: left;
    width: 33.33%;
    padding: 1px;

  }
  

  .box p {
    display: block;
  color: white;
  text-align: center;
  padding: 0.1px 0.1px;
  font-weight:bold;
  text-decoration: none;
  }
  
    </style>
  
  
  
  <table style="width:100%" >
    
   
  

</body>
</html>

    
      <th colspan="4" bgcolor=" #eae5ed  " height="40" align="left">Dashboard</th>
    </tr>
  </table>
 
  <table align="right" style="width:75%" cellspacing="10">
  
      
        
  
    
      <th colspan="8" bgcolor="#900C3F " height="45" width="170"><font color="white">emails</font></th>
    </tr>
    <tr>

      




        
        
      
        
  
    
          
        </tr>
        <tr>
    
          <td bgcolor=" #2baeb2" height="120" width="120">
    
    
    
    
    
    <table border="1"><tr><td><img src="select.png" align="center" width="40" height="40"><td width="360">User name</td><td width="360">Email ID</td></tr>
    <tr><td></td><td>
    <?php
            
            include_once "assets/php/dbcon.php";
            
            $ql="SELECT * FROM subscribers"; 
            $result=mysqli_query($con,$ql);
            $resultCheck = mysqli_num_rows($result);

           if($resultCheck > 0) {
            
              while ($row= mysqli_fetch_assoc($result))
              {
            
                echo"<p>"; 
                echo $row['name'];
                echo "</p>";
            
            }
            }          
          
            ?>
            </td>
          <td>
          <?php
            
            include_once "assets/php/dbcon.php";
            
            $ql="SELECT * FROM subscribers"; 
            $result=mysqli_query($con,$ql);
            $resultCheck = mysqli_num_rows($result);

           if($resultCheck > 0) {
            
              while ($row= mysqli_fetch_assoc($result))
              {
            
                echo"<p>"; 
                echo $row['email'];
                echo "</p>";
            
            }
            }          
          
            ?>
          </td>
        </tr>

    <tr><td><img src="red.png" align="center" width="40" height="40"><td width="360"></td><td width="360"></tr></table>
    
            
      
      
       
</td>   


  <style>
    * {
      box-sizing: border-box;
    }
    
    
     .footer {
      background-color: rgb(17, 16, 16);
      color: rgb(241, 234, 234);
      padding: 1px;
    }
    
    .table{
      float: center;
    }
    
    .column {
      float: left;
      padding: 15px;
    }
    
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .menu {
      width: 35%;
    }
    
    .content {
      width: 75%;
    }
    
    .menu ul {
      list-style-type: none;
      color:aqua
      margin: 0;
      padding: 0;
    
    }
    
    .menu li {
      padding: 16px;
      margin-bottom: 5px;
      background-color: #f7fafc;
      color: #1f1d1d;
    
    }
    
    
    </style>
    </head>
    <body>
    <div class="menu ul">
      <table width="290"><tr bgcolor="  #177df6 ">
        <td ><h4><a href="index.html">Dashboard</a></td><td><a href="index.php"><img src="set.png" width="40" height="40"></a></h4></td></tr>
        <tr bgcolor="  #177df6  ">
<td><h4><a href="delete.php">Delete</a></td><td><a href="delete.php"><img src="delete.png" width="40" height="40"></a></h4></td></tr>
<tr bgcolor="  #177df6  " >
  

<td><h4><a href="create.php">Create</a></td><td><a href="create.php"><img src="pencil.png" width="40" height="40"></a></h4></td></tr>

  <tr bgcolor="  #177df6  ">
  

    <td><h4><a href="emails.php">Subscribers</a></td><td><a href="emails.php"><img src="mail.jpeg" width="40" height="40"></a></h4></td></tr>    
        
        
        </table>
      </div>
            
   
    
    

   
    

</body>
</html>
