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

<?php 
$sql = "SELECT * FROM contact WHERE id = '1' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>


<body>
    <?php include 'navbar.php' ?>


</body>



<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1><?php echo $row['title']?></h1>
    <p><?php echo $row['description']?></p>
  </div>
</div>

<style>
.jumbotron {
    background-color: #F7E0FF;
}

h1 {
    color: rebeccapurple;
    font-weight: bold;
}

p {
    color: rebeccapurple;
    font-size: 25px;

}

.btn {
    background-color: rebeccapurple;
}



</style>




<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h5 class="card-title">Contact Details</h5>
        </div>
        <?php 
       $sql = "SELECT * FROM contact WHERE id = '1' ";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
        ?>
        <div class="card-body">
            <form id="contact">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label"><?php echo $row ['details']?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" name="PhoneNumber" placeholder="Write your phone number" class="form-control mb-2">
                            </div>
                        </div>
                         <?php 
       $sql = "SELECT * FROM contact WHERE id = '2' ";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
        ?>
                        <div class="form-group">
                            <label for="" class="control-label"><?php echo $row ['details']?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                 <input type="text" name="E-Mail" placeholder="Write your e-mail address" class="form-control mb-2">
                            </div>
                        </div>
                         <?php 
       $sql = "SELECT * FROM contact WHERE id = '3' ";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
        ?>
                        <div class="form-group">
                            <label for="" class="control-label"><?php echo $row ['details']?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" name="Instagram" placeholder="Write your username" class="form-control mb-2">
                            </div>
                        </div>
                         <?php 
       $sql = "SELECT * FROM contact WHERE id = '4' ";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
        ?>
                 <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label"><?php echo $row ['details']?></label>
                             <textarea name="msg" class="form-control mb-2" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary btn-sm" form="contact">SUBMIT</button>
        </div>
    </div>
</div>
<br>
<p style="text-align: center;">&#129338;<a href="about.php">GO BACK&#129338;</a></p>
</form>
</div>
</div>
</div>
</html>
<?php
mysqli_close($conn);
?>
