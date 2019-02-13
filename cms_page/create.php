<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/css/cms.css">
</head>
   
   

<body background="im2.jpeg">

<ul>
  <li><a class="active" href="index.php">Myadmin</a></li>
  
  <li style="float:right"><a class="" href="index.php">Logout</a></li>
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
<tr><td><img src="select.png" align="center" width="40" height="40"><td> Title</td><td><input type="text" name="title" maxlength="40" size="100" ></td></tr>
<tr><td><img src="select.png" align="center" width="40" height="40"><td>Author</td><td><input type="text" name="author" maxlength="40" size="100" ></td></tr>
<tr><td><img src="select.png" align="center" width="40" height="40"><td>Description</td><td><input type="text" name="description"maxlength="40" size="100" ></td></tr>
<tr><td><img src="select.png" align="center" width="40" height="40"><td>category</td><td>
   <select name="categ" style="width: 625px;">
  <option value="Business">Business</option>
  <option value="Politics">Politics</option>
  <option value="Education">Education</option> 
  <option value="Lifestyle">Lifestyle</option>
  
 



</select></td><br>

<tr><td><img src="select.png" align="center" width="40" height="40"><td>Image</td><td> <input type="file" name="image"maxlength="40" size="100" ></form></td>


        <td><img src="send.png" align="center" width="40" height="40"><td><input type="submit" value="submit" name="submit"></td></tr>
      
</form>     
</table>   
       
</td>   
    <div class="menu ul">
      <table width="290"><tr bgcolor="  #177df6 ">
        <td ><h4><a href="index.php">Dashboard</a></td><td><a href="index.php"><img src="set.png" width="40" height="40"></a></h4></td></tr>
        <tr bgcolor="  #177df6  ">
<td><h4><a href="create.php">Create</a></td><td><a href="create.php"><img src="delete.png" width="40" height="40"></a></h4></td></tr>
<tr bgcolor="  #177df6  " >
  

<td><h4><a href="delete.php">Delete</a></td><td><a href="delete.php"><img src="pencil.png" width="40" height="40"></a></h4></td></tr>
<tr bgcolor="  #177df6  ">
  

  

    <td><h4><a href="emails.php">Subscribers</a></td><td><a href="emails.php"><img src="mail.jpeg" width="40" height="40"></a></h4></td></tr>    
        
    <tr bgcolor="  #177df6  ">
  

  <td><h4><a href="users.php">Users</a></td><td><a href="users.php"><img src="user.png" width="40" height="40"></a></h4></td></tr>    
  <tr bgcolor="  #177df6  ">
  

  <td><h4><a href="messages.php">Messages</a></td><td><a href="messages.php"><img src="message.png" width="40" height="40"></a></h4></td></tr> 
        </table>
      </div>
            
   
    
    

   
    

</body>
</html>
