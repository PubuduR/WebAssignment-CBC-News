<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/css/cms.css">
</head>
   
   

<body background="im2.jpeg">

<ul>
  <li><a class="active" href="index.php">Myadmin</a></li>
  
  <li style="float:right"><a class="login.php" href="assets/php/logout.php">


<?php

  session_start();
  if(isset($_SESSION['email']))
  {
  $emailSes=$_SESSION['email'];
  echo "Logout $emailSes"; 
  }
  ?></a></li>
</ul>

  
  
  <table style="width:100%" >
    

</body>
</html>

    
      <th colspan="4" bgcolor=" #eae5ed  " height="40" align="left"></th>
    </tr>
  </table>
 
  <table align="right" style="width:75%" cellspacing="10">
  

      <th colspan="8" bgcolor="#900C3F " height="45" width="170"><font color="white">INSERT</font></th>
    </tr>
    <tr>

      <td bgcolor=" #2baeb2" height="120" width="120">



<table>
<form name=form1 method="POST" action="assets/php/insert.php" enctype="multipart/form-data">
<tr><td><img src="assets/img/select.png" align="center" width="40" height="40"><td> Title</td><td><input type="text" name="title"  size="100" ></td></tr>
<tr><td><img src="assets/img/select.png" align="center" width="40" height="40"><td>Author</td><td><input type="text" name="author"  size="100" ></td></tr>
<tr><td><img src="assets/img/select.png" align="center" width="40" height="40"><td>Description</td><td><textarea name = "description" rows="8" cols="50" size="1000"></textarea></tr>
<tr><td><img src="assets/img/select.png" align="center" width="40" height="40"><td>category</td><td>
   <select name="categ" style="width: 625px;">
  <option value="Business">Business</option>
  <option value="Politics">Politics</option>
  <option value="Education">Education</option> 
  <option value="Lifestyle">Lifestyle</option>
  
 



</select></td><br>

<tr><td><img src="assets/img/select.png" align="center" width="40" height="40"><td>Image</td><td> <input type="file" name="image" size="100" ></td>


        <td><img src="assets/img/send.png" align="center" width="40" height="40"><td><input type="submit" value="submit" name="submit"></td></tr>
      
</form>     
</table>   
       
</td>   
    <div class="menu ul">
      <table width="290"><tr bgcolor="  #177df6 ">
        <td ><h4><a href="index.php">Dashboard</a></td><td><a href="index.php"><img src="assets/img/set.png" width="40" height="40"></a></h4></td></tr>
        <tr bgcolor="  #177df6  ">
<td><h4><a href="create.php">Create</a></td><td><a href="create.php"><img src="assets/img/delete.png" width="40" height="40"></a></h4></td></tr>
<tr bgcolor="  #177df6  ">
<td><h4><a href="update.php">Update</a></td><td><a href="update.php"><img src="assets/img/update.png" width="40" height="40"></a></h4></td></tr>

<tr bgcolor="  #177df6  " >
  

<td><h4><a href="delete.php">Delete</a></td><td><a href="delete.php"><img src="assets/img/pencil.png" width="40" height="40"></a></h4></td></tr>
<tr bgcolor="  #177df6  ">
  

  

    <td><h4><a href="emails.php">Subscribers</a></td><td><a href="emails.php"><img src="assets/img/mail.jpeg" width="40" height="40"></a></h4></td></tr>    
        
    <tr bgcolor="  #177df6  ">
  

  <td><h4><a href="users.php">Users</a></td><td><a href="users.php"><img src="assets/img/user.png" width="40" height="40"></a></h4></td></tr>    
  <tr bgcolor="  #177df6  ">
  

  <td><h4><a href="messages.php">Messages</a></td><td><a href="messages.php"><img src="assets/img/message.png" width="40" height="40"></a></h4></td></tr> 
        </table>
      </div>
            
   
    
    

   
    

</body>
</html>
