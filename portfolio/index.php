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
	<title>Portfolio</title>

  <html lang="en">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<style>
  <?php include 'home.css' ?>
</style>

<body>
   <?php include 'navbar.php' ?>
 </body>

<?php 
$sql = "SELECT * FROM homepage WHERE id = '1' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>


<section id="first">
<div class="jumbotron">
  <h1 class="display-4"><?php echo $row['greeting'];?></h1>
  <p class="lead"><?php echo $row['title'];?></p>
  <p><?php echo $row['description'];?></p>
  <p class="lead">
    <img src="header1.png">
  </p>
<a href="<?php echo "contact.php"; ?>">REACH ME OUT</a>

</div>
</section>


<style>


section#first a:visited {
  color: rebeccapurple;
  background-color: transparent;
  text-decoration: none;
  margin-left: 10vh !important;
  margin-bottom: 10vh !important;
}

.card {
  margin-top: 15vh !important;
  margin-left: 70vh !important;
  background-color: #F7E0FF !important;
}

.card-title {
  text-align: center;
  color: rebeccapurple;
  font-weight: bolder;
}

.card-text {
  text-align: center;
}

.btn {
  margin-left: 28vh !important;
  border-radius: 10px !important;
  background-color: rebeccapurple;
}

p{
  font-size: 25px;

}

</style>





<section id="second">
<div class="container">
  <h1><?php echo $row['check_out']; ?></h1>
</div>
</section>


<?php 
$sql = "SELECT * FROM homepage WHERE id = '1' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<section id="third">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $row['photoslides']?>" alt="First slide">
    </div>
    <?php 
$sql = "SELECT * FROM homepage WHERE id = '2' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $row['photoslides']?>" alt="Second slide">
    </div>
    <?php 
$sql = "SELECT * FROM homepage WHERE id = '3' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $row['photoslides']?>" alt="Third slide">
    </div>
    <?php 
$sql = "SELECT * FROM homepage WHERE id = '4' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $row['photoslides']?>" alt="Fourth slide">
    </div>
    <?php 
$sql = "SELECT * FROM homepage WHERE id = '5' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $row['photoslides']?>" alt="Fifth slide">
    </div>
    <?php 
$sql = "SELECT * FROM homepage WHERE id = '6' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $row['photoslides']?>" alt="Sixth slide">
    </div>
  </div>

<section id="third">
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>



<?php 
$sql = "SELECT * FROM homepage WHERE id = '1' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="card" style="width: 30rem;">
  <img class="card-img-top" src="header2.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row ['want_to']; ?></h5>
    <p class="card-text"><?php echo $row ['desc']; ?></p>
    <p style="text-align: right;"><a href="about.php">GO&#128694;&#127995;</a></p>
  </div>
</div>



</body>
</html>
<?php
mysqli_close($conn);
?>