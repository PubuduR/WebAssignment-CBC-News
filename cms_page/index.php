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
  ?>
  
  </a></li>
</ul>

  
  <table style="width:100%" >
    
   
  
</body>
</html>

    
      <th colspan="4" bgcolor=" #eae5ed  " height="40" align="left"></th>
    </tr>
  </table>
 
  <table align="right" style="width:75%" cellspacing="10">
  
      
        
  
    
      <th colspan="8" bgcolor="#900C3F " height="45" width="170"><font color="white">Website overview</font></th>
    </tr>
    <tr>

      <td bgcolor=" #2baeb2
      " height="120" width="120">
        <table><tr><td><img src="user.png" align="center" width="40" height="40"></td></tr><tr><td></td></tr></table>
      </div>
      
      <td bgcolor="#d43b26" height="120" width="120">
          <table><tr><td><img src="pages.jpeg" width="40" height="40"></td></tr><tr><td></td></tr></table>
      
       
</td>   

    </head>
    <body>
    <div class="menu ul">
      <table width="290"><tr bgcolor="  #177df6 ">
        <td ><h4><a href="index.php">Dashboard</a></td><td><a href="index.php"><img src="set.png" width="40" height="40"></a></h4></td></tr>

        
        


        <tr bgcolor="  #177df6  ">
        <td><h4><a href="create.php">create</a></td><td><a href="create.php"><img src="pencil.png" width="40" height="40"></a></h4></td></tr>

<tr bgcolor="  #177df6  ">
  

  
  <td><h4><a href="delete.php">Delete</a></td><td><a href="delete.php"><img src="delete.png" width="40" height="40"></a></h4></td></tr>




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
