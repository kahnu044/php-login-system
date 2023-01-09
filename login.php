<?php
include 'config.php';
if (isset($_POST['submit'])) {
  $username = $_POST['user_name'];
  $password = md5($_POST['password']);


  $sql = "SELECT * FROM users WHERE user_name='$username' AND password= '$password' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location:welcome.php");



    $success  = '<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Welcome Back! ' . $username . '</strong> You are logged in.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>';
  } else {
    $failed = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sorry! ' . $username . '</strong> Username Or Password Not Match.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <?php include 'header.php'; ?>
  <?php
  echo $success;
  echo $failed;
  ?>

  <center>
    <div class="container">
      <h2 class="text-center">LogIn To My Site</h2>

      <form action="" method="POST">
        <div class="form-group col-md-6">
          <label for="user_name">Username : </label>
          <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Username">

        </div>
        <div class="form-group col-md-6">
          <label for="password">Password :</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
      </form>

    </div>
  </center>





  </body>
  <?php include 'footer.php'; ?>

</html>