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
  <li><a class="active" href="index.php">Myadmin</a></li>
  <li><a class="active" href="index.php,">Dashboard</a></li>
  
  <li style="float:right"><a class="" href="index.php">Logout</a></li>
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
  
      
        
  
    
      <th colspan="8" bgcolor="#900C3F " height="45" width="170"><font color="white">DELETE</font></th>
    </tr>
    <tr>

      <td bgcolor=" #2baeb2" height="120" width="120">

      <form action="assets/php/delete.php" method="POST">
          <table><tr><td><img src="select.png" align="center" width="40" height="40"><td>
          <select name="post_del" height="120" width="120">
          <option value="Choose a Post"></option>
      <?php
        include_once "assets/php/dbcon.php";
        $sql = mysqli_query($con, "SELECT title from posts");
        $row=mysqli_num_rows($sql);
        while($row = mysqli_fetch_array($sql))
        {
            echo "<option value='". $row['title'] ."'>" .$row['title'] ."</option>" ;
        }
        ?>

    </select></td></tr><tr><td></td></tr></table>
            <br><br><br><br><br><br>
            <br>
            <br>

        <tr><td><img src="d.jpeg" align="center" width="40" height="40"><td><input type="submit" value="delete" name="delete"></td><td><input type="reset" value="Reset"></td></tr><tr><td></td></tr>
        
        
        </table>
        </form>
      
      
      
       
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
        <td ><h4><a href="index.php">Dashboard</a></td><td><a href="index.php"><img src="set.png" width="40" height="40"></a></h4></td></tr>
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
