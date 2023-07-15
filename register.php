<?php 
include('server.php'); 

if($_GET["submit"])
{
    $us=$_GET['Username'];
	$em=$_GET['Email'];
    $pa=$_GET['Password'];

    if($us!="" && $em!="" && $pa!="")
    {
        $query="INSERT INTO login_signup VALUES(NULL,'$us','$em','$pa')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo"Data inserted in file";
        }
    }
    else
    {
        echo"All field are required";
    }

    $con->close();
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <img class="images" src="images.jpg" alt="news">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="get">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="Username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="Email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="Password">
  	</div>
  	
  	<input type="submit" value="submit" name="submit"/>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  
</body>
</html>