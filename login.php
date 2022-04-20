<?php
	session_start();
	require('db.php');

	if (isset($_POST['submit'])) {

		$email = $_POST['email'];

		if (isset($_POST['email']) && isset($_POST['password'])) {
			
			$sql = "SELECT * FROM users WHERE email = :email";
			$stmt = $link->prepare($sql);
			$stmt->execute(array(':email' => $email));
			$count = $stmt->rowCount();

			if ($count > 0) {
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				if (password_verify($password, $row['password'])) {
					$_SESSION['user'] = $row['name'];
					$_SESSION['uid'] = $row['id'];
					
					echo "<script> alert('Successful') </script>";
					header("Location:dashboard.php");
				} else {
					echo "Login Failed";
				}
			} else {
				echo "This email is not recognised!";
			}
		} else {
			echo "Please, fill all fields.";
		}
	}
?>

		<h2>Login</h2>
			<form method="post">
			  
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" name="email" id="email" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" name="password" placeholder="Password">
			  </div>
			  <!-- <input type="submit" name="submit" value="submit"> -->
			  <button type="submit" name="submit">Login</button>
			</form>