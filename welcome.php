<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kanha Login System</title>
	<?php include 'header.php'; ?>
	<?php
	if (($_SESSION['loggedin'] == true)) {
		echo '<center>
		<div class="container my-4">
				<div class="alert alert-success col-md-8" role="alert">
				<strong>Hello! ' . $_SESSION['username'] . ' Welcome Back To Our Site </strong><br>
				This is our welcome page , after login you will redirect to this page .
				</div>
		</div>
	 <center>';
	} else {
		echo '<center>
		<div class="container my-4">
				<div class="alert alert-success col-md-8" role="alert">
				<strong>Sorry! ' . $_SESSION['username'] . ' You are not our user </strong><br>
				Please login to access the features of this page  .
				</div>
		</div>
	 <center>';
	}

	?>


	</body>
	<?php include 'footer.php'; ?>

</html>