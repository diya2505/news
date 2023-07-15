<?php
    $host = 'localhost';
    $name = 'root';
    $pass = '';
    $dbname = 'user_info';

     $conn = mysqli_connect($host,$name,$pass,$dbname);

     $sql = "SELECT * FROM login_signup";
     $res= mysqli_query($conn,$sql);
     if($res)
     {
        echo "";
     }
     else
     {
        echo "Failed";
     }

?>