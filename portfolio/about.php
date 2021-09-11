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

<?php 
$sql = "SELECT * FROM about WHERE id = '1' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<p style="text-align: left;"><a href="index.php">&#128072;&#127995;HOME</a></p>

    <div class="jumbotron jumbotron-fluid text-center" color="#F7E0FF">
  <div class="container">
    <p>Here are my skillbars! I’d love to learn new things and keep evolving in the design world. The learning is endless!</p>
  </div>
</div>

<div class="labels">
  <span>HTML CSS</span>
  <span><?php echo $row['html_css'];?>%</span>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['html_css'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['html_css'];?>%;">
  </div>
</div>
<div class="labels">
  <span>Javascript</span>
  <span><?php echo $row['javascript'];?>%</span>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['javascript'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['javascript'];?>%">
  </div>
</div>
<div class="labels">
  <span>Aftereffects</span>
  <span><?php echo $row['aftereffects'];?>%</span>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['aftereffects'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['aftereffects'];?>%">
  </div>
</div><div class="labels">
  <span>Illustrator</span>
  <span><?php echo $row['illustrator'];?>%</span>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['illustrator'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['illustrator'];?>%;">
  </div>
</div>
<div class="labels">
  <span>Maya</span>
  <span><?php echo $row['maya'];?>%</span>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['maya'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['maya'];?>%;">
  </div>
</div>
<div class="labels">
  <span>Photoshop</span>
  <span><?php echo $row['photoshop'];?>%</span>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['photoshop'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['photoshop'];?>%;">
  </div>
</div>



<div class="below-top" id="experience">
    <div class="container">
        <div class="row">
            <h1>EXPERIENCE</h1>
        
        </div>
      </div>
    </div>


<section id="first">
<p style="text-align: center; font-size: 200px"><a href="experience1.php">&#129353;</a></p>
</section>
    
<section id="second">
    <p style="text-align: center; font-size: 200px"><a href="experience2.php">&#129337;&#127995;</a></p>
</section>

<section id="third">
    <p style="text-align: center; font-size: 200px"><a href="experience3.php">&#128373;&#127995;</a></p>
</section>
  
<section id="fourth">   
  <p style="text-align: right;"><a href="contact.php">MESSAGE ME&#128073;&#127995;</a></p>
</section>

<style>

.jumbotron{
color: rebeccapurple;
background-color: #F7E0FF !important;
}

body {
  padding: 50px;
}
.labels {
  display: flex;
  justify-content: space-between;
  margin-bottom: 5px;
}
.labels span {
}
.progress {
  height: 18px;
}
.progress-bar {
  background: -webkit-linear-gradient(left, #33156d 0%, #f282bc 100%);
  /* Chrome10-25,Safari5.1-6 */
}

p {
    font-size: 25px;
    color: rebeccapurple;

}

h1 {
  margin-top: 10vh;
  margin-left: 65vh;

}

body {
  font-size: 20px;
}

</style>




</body>
</html>

<?php
mysqli_close($conn);
?>
