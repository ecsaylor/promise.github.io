<?php
	include('db.php');
	$sql = "SELECT * FROM users";
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$count = $stmt->rowCount();

	header('Content-Type:application/json');

	if ($count > 0) {
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$arr[] = $row;
		}
		echo json_encode(['status'=>'true', 'data'=>$arr, 'result'=>'found']);
	} else {
		echo json_encode(['status'=>'true', 'data'=>'No data found', 'result'=>'not']);
	}
?>