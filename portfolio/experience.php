<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio_web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno()){
  echo "Failed to connect!";
  exit();
}


?>

<!DOCTYPE html>
<html>
<head>

    <html lang="en">
    <title>Portfolio</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <? php include 'navbar.php' ?>

<?php 
$sql = "SELECT * FROM experience WHERE id = '1' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>


<div class="below-top" id="experience">
    <div class="container">
        <div class="row">
            <h1>EXPERIENCE</h1>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p><?php echo $row['text_one']?></p>
                <img src="emoji1.png">
         </div>
        <div class="row">
            <div class="col-sm-3">
                <p><?php echo $row['text_two']?></p>
                <img src="emoji2.png">
            </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <p><?php echo $row['text_three']?></p>
            <img src="emoji3.png">
          </div>
        </div>
      </div>