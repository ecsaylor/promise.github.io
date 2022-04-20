<?php
	session_start();
	require('db.php');

	if (!isset($_SESSION['uid'])) {
		header('Location:index.php');
	}
	

	if (isset($_POST['send'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		// $password = $_POST['password'];
		$mobile = $_POST['mobile'];

		$sql = "SELECT email FROM users WHERE email = :email";
		$stmt = $link->prepare($sql);
		$stmt->execute(array(':email'=>$email));

		if ($stmt->rowCount() > 0) {
			echo "<script> alert('Email already exists!') </script>";
		} else {
			$hash = password_hash($password, PASSWORD_BCRYPT, ["COST"=>8]);

			$sql = "INSERT INTO users(name,email,password,mobile) VALUES(:name, :email, :password, :mobile)";
	      	$stmt = $link->prepare($sql);
	      	$stmt->execute(array(':name'=>$name, ':email'=>$email, ':password'=>$hash,':mobile'=>$mobile));

	      	if ($stmt > 0) {
	      		echo "<script>alert('User created successfully!')</script>";
	      		header("Location:index.php");
	      	}
      	}
      	
	}
?>
			<table align="right">
				<tr>
					<th>
						<form method="post" action="logout.php">
							<button type="submit" name="logout">Logout</button>
						</form>
					</th>
				</tr>
			</table>

			<br>

			<table align="center">
				<tr><th>
				<h2>Create User</h2>

				<form method="post" action="dashboard.php">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" placeholder="Enter name">
				  </div>
				  <br>
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" name="email" id="email" placeholder="Enter email">
				  </div>
				  <br>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" name="password" placeholder="Password">
				  </div>
				  <br>
				  <div class="form-group">
				    <label for="mobile">Phone No</label>
				    <input type="number" name="mobile" id="mobile" placeholder="Enter phone number">
				  </div>
				  <br>
				  <input type="submit" name="send" value="Register">
				</form>
				</th></tr>

			</table>