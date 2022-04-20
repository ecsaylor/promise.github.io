<table align="right">
	<tr>
		<th>
			<button type="submit"><a href="login.php">Login</a></button>
		</th>
	</tr>
</table>

<h2 align="center">Welcome to Promise</h2>
<?php
	$url = "http://localhost/promise/view.php";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	// echo $result;
	$result = json_decode($result, true);
	// echo '<pre>';
	// print_r($output);
	if (isset($result['status'])) {
		if ($result['status'] == true) {
			if (isset($result['result'])) {
				if ($result['result'] == true) {
					// echo '<pre>';
					// print_r($result['data']);
					?>
					<table border="" align="center">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Mobile No</th>
							<th>Action</th>
						</tr>
						<?php
							foreach ($result['data'] as $list) {
								echo "<tr>
										<td>".$list['id']."</td>
										<td>".$list['name']."</td>										
										<td>".$list['email']."</td>
										<td>".$list['password']."</td>
										<td>".$list['mobile']."</td>
										<td>
										<button><a href=edit.php?id=".$list['id'].">Update</a></button> | <button><a href=delete.php?id=".$list['id'].">Delete</a></button>
										</td>
									</tr>";
							}
						?>
					</table>
					<?php
				} else {
					echo $result['data'];
				}
			}
		} else {
			echo $result['data'];
		}
	} else {
		echo "API not working";
	}
?>