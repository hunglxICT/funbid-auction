<?php
	session_start();
?>
<?php
	include('../api.php');
	if (!isset($_SESSION['token'])) {
		$_SESSION['status'] = "You must log in first!";
		header('Location: /');
	}
	else if (isset($_POST)) {
		if (isset($_POST['name']) && isset($_POST['startdate']) && isset($_POST['enddate'])) {
			$image = '';
			$category = '';
			$initprice = 0;
			$name = $_POST['name'];
			$startdate = $_POST['startdate'];
			$enddate = $_POST['enddate'];
			if ($startdate > $enddate) die();
			if (isset($_POST['image'])) $image = $_POST['image'];
			if (isset($_POST['category'])) $category = $_POST['category'];
			if (isset($_POST['initprice'])) $initprice = $_POST['initprice'];
			// create curl resource
			$ch = curl_init();
			$data = array('name' => $name,
				'image' => $image,
				'category' => $category,
				'initprice' => $initprice,
				'startdate' => $startdate,
				'enddate' => $enddate
				);

			// set url 
			curl_setopt($ch, CURLOPT_URL, $API_SERVER."/upload-new-item");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: '.$_SESSION['token']));

			// $output contains the output json
			$output = curl_exec($ch);
			// close curl resource to free up system resources 
			curl_close($ch);
			//var_dump(json_decode($output, true));
			if ($output != $FAIL_MESSAGE) $_SESSION['status'] = "Upload new item successfully!";
			else $_SESSION['status'] = "Upload new item fail";
			header('Location: /');
		}
		header('Location: /');
	}
	header('Location: /');
?>