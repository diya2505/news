<?php
 session_start();
 include("server.php");
 if(isset($_POST['submit']))
{
    $user=$_POST['Username'];
    $pwd=$_POST['Password'];
    $query="SELECT * FROM login_signup where Username='$user' && Password='$pwd'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['user_name']=$user;
        header('location:index.php');
        //header('location:header.php');
    }
    else
    {
        echo "Login Failed ";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action=" ">
  	
  	<div class="input-group">
        <label>username</label>
        <input type="text" name="Username" >
    </div>

  <!---  <div class="input-group">
        <label>Email </label>
        <input type="email" name="email">
    </div> -->

    <div class="input-group">
        <label>Password</label>
        <input type="password" name="Password">
    </div>
    <input type="submit" value="submit" name="submit"/>
  	
  </form>
</body>
</html>