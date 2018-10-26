<?php 
include 'koneksi.php';

session_start();
$id = $_SESSION['id'];
$que = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
 while ($ac = mysqli_fetch_array($que)) {
 
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>regis</title>
  </head>
  <body>
    <form method="POST" >
  
  <div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" disabled name="user" value=<?php echo $ac['name'];  ?>>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" disabled name="pass" value=<?php echo $ac['pass'];  ?>>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value=<?php echo $ac['email'];  ?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 

  <button type="submit" class="btn btn-primary" name="send">change</button>
 <div class="card-body">
    <a href="dashboard.php" class="card-link">dashboard</a>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php 

} 
if (isset($_POST['send'])) {
	if (substr($_POST['email'],-10)=="@gmail.com") {
			$email = $_POST['email'];
		}
	$query = mysqli_query($conn,"UPDATE user SET email = '$email' WHERE id='$id'");
	if ($query) {
		echo "BERHASIL";
	}
}

?>