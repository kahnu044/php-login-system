<?php
include 'config.php';
if (isset($_POST['submit'])) {
	$username = $_POST['user_name'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	//check user name exist or not
	$sql = " SELECT * FROM users WHERE user_name= '$username'";
	$result = mysqli_query($conn, $sql);
	$exist_rows = mysqli_num_rows($result);

	if ($exist_rows > 0) {
		//show error for user name exist
		$failed = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Sorry! [' . $username . '] - </strong> Username Already Exist.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				  </div>';
	} else {
		//check both password same or not
		if ($password  == $cpassword) {
			$sql = "INSERT INTO `users` ( `user_name`, `password`, `date`) VALUES ('$username', '$password', CURRENT_TIMESTAMP);";
			$result = mysqli_query($conn, $sql);
			if ($result) {			//show account created successfully
				$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Congratulations! [' . $username . '] - </strong> You Successfully Created Your Account. Please login <a href="./login.php"> HERE</a>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
			}
		} else {
			//show error for password not match
			$failed = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					   <strong>Sorry! [' . $username . '] - </strong> Your Passwords Are Not Matched.
					   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					   <span aria-hidden="true">&times;</span>
					   </button>
					   </div>';
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp Form</title>
	<?php include 'header.php'; ?>
	<?php
	echo $success;
	echo $failed;
	?>
	<center>
		<div class="container">
			<h2 class="text-center">Sign Up Here To My Site</h2>

			<form action="" method="POST">

				<div class="form-group col-md-6">
					<label for="user_name">Username : </label>
					<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Username">

				</div>
				<div class="form-group col-md-6">
					<label for="password">Password :</label>
					<input type="password" class="form-control" id="password" required="" name="password" placeholder="Password">
				</div>

				<div class="form-group col-md-6">
					<label for="cpassword">Repeat Password :</label>
					<input type="password" class="form-control" id="cpassword" required="" name="cpassword" placeholder="Retype Password">
					<small id="emailHelp" class="form-text text-muted">Make Sure give same password here.</small>
				</div>

				<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
			</form>
		</div>
	</center>
	</body>
	<?php include 'footer.php'; ?>

</html>

<a href=""></a>