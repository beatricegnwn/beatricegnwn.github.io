<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio_web";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	echo '<script>location.replace("index.php")</script>';
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM portfolio WHERE id = '".$id."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="jumbotron jumbotron-fluid text-center" >
  <div class="container">
  	<img style="width: 200px" src="header2.png/<?php echo $row['header2.png']; ?>">
    <h1>This is my <?php echo $row['title'].' '. ?></h1>
    <p> <?php $row['description']; ?></p>
  </div>
</div>

<div class=col-sm-3">
  <p class="like-h3"> </p>
  <?php 
  $conn = mysqli_connect ($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM skills WHERE id = '".$id. "'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <h1>SKILLS</h1>
  <p><?php echo $row['title']; ?></p>
  <p><?php echo $row['image']; ?></p>
  <p><?php echo $row['description']; ?></p> 
  </div>


<div class="jumbotron jumbotron-fluid text-center" >
  <div class="container">
    <img style="width: 200px" src="images/<?php echo $row['image']; ?>">
    <h1>CONTACT</h1>
    <p>Have a question or want to work together?.</p>
  </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>

                        </div>
                    <div class="card-body">
                        <form action="contact.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




  <br>
  <p style="text-align: center;"><a href="index.php">&larr; Go Back</a>
<br>


</body>
</html>
<?php
mysqli_close($conn);
?>