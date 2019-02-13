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
  <li><a href="index.php">Dashboard</a></li>
  
  <li style="float:right"><a class="" href="assets/php/logout.php">

 <?php

  session_start();
  if(isset($_SESSION['email']))
  {
  $emailSes=$_SESSION['email'];
  echo "Logout $emailSes"; 
  }
  ?>


</a></li>
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
  
      
        
  
    
      <th colspan="8" bgcolor="#900C3F " height="45" width="170"><font color="white">INSERT</font></th>
    </tr>
    <tr>

      <td bgcolor=" #2baeb2" height="120" width="120">





<table>
<form name=form1 method="POST" action="assets/php/insert.php" enctype="multipart/form-data">
<tr><td><img src="select.png" align="center" width="40" height="40"><td> Title</td><td><input type="text" name="title" maxlength="40" size="100" ></td></tr>
<tr><td><img src="select.png" align="center" width="40" height="40"><td>Author</td><td><input type="text" name="author" maxlength="40" size="100" ></td></tr>
<tr><td><img src="select.png" align="center" width="40" height="40"><td>Description</td><td><input type="text" name="description" size="100" ></td></tr>
<tr><td><img src="select.png" align="center" width="40" height="40"><td>category</td><td>
   <select name="categ" style="width: 625px;">
  <option value="Business">Business</option>
  <option value="Politics">Politics</option>
  <option value="Education">Education</option>
  <option value="Lifestyle">Lifestyle</option>
  
 



</select></td><br>

<tr><td><img src="select.png" align="center" width="40" height="40"><td>Image</td><td><input type="file" name="image"maxlength="40" size="100" ></td>


        <td><img src="send.png" align="center" width="40" height="40"><td><input type="submit" value="submit" name="submit"></td></tr>
      
</form>     
</table>   
       
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
