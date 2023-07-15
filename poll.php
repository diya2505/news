<?php
$insert = false;
if(isset($_POST['name'])){
       //set connection variables
       $server="localhost"; 
       $username="root";
       $password="";
       
       //create a database connection
       $con = mysqli_connect($server, $username, $password);

       if(!$con)
       {
        die("connection to this databse failed due to" . mysqli_connnect_errer());

        }
    //    e =cho "Success connecting to db"; =
     $article_id = $_POST['article_id'];
     $spam_count = $_POST['spam_count'];
     
     $sql = "INSERT INTO `reported_spam` (`article_id`, `spam_id`, `created_at`) 
              VALUES ('$article_id', '$spam_id', current_timestamp())";

      //echo $sql;

      //Exectute the query
      if($con->query($sql) == true)
      {
       // echo "Successfully inserted";

       //flag for successful insertion
           $insert = true;
      }
      else{
        echo "ERROR: $sql <br> $conn->error";

      }

      //close the connection
      $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pollstyle.css">
    <script src="poll.js"></script>
</head>
<body>
      <!-- Place this HTML wherever you want to display the report button/link -->
<div id="reportButtonContainer">
    <button id="reportButton">Report Spam/Fake News</button>
  </div>
  
  <!-- Modal for the report form -->
  <div id="reportModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Report Spam/Fake News</h2>
      <form id="reportForm">
        <label for="reportReason">Reason for Reporting:</label>
        <textarea id="reportReason" rows="4" cols="50" required></textarea>
        <br>
        <input type="submit" value="Submit Report">

        <p>
  		    <a href="polllink.php">Report Spam/Fake News</a>
  	</p>

      </form>
    </div>
  </div>
  


</body>
</html>