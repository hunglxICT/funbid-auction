<?php
	session_start();
?>
<?php
	include('../api.php');
	if (!isset($_SESSION['token'])) {
		echo "You must log in first!";
		echo "<br><a href='/'>Return to main page</a>";
		echo "<br><a href='/login/'>Return to login page</a>";
	}
	else if (isset($_POST)) {
		if (isset($_GET['auction_id']) && isset($_POST['newprice'])) {
			$item = $_GET['auction_id'];
			// create curl resource
			$ch = curl_init();
			$data = array('itemid' => $item);
			curl_setopt($ch, CURLOPT_URL, $API_SERVER."/get-item-detail");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			// $output contains the output json
			$output = curl_exec($ch);
			// close curl resource to free up system resources 
			curl_close($ch);
			$item_info = json_decode($output, true);
			$item_currentprice = $item_info['currentprice'];
			$item_newprice = $_POST['newprice'];
			if ($item_currentprice >= $item_newprice) {
				die('New price must greater than old price');
			}
			$data = array('itemid' => $item,
				'bidprice' => $item_newprice);
			
			// create curl resource
			$ch = curl_init();
			// set url 
			curl_setopt($ch, CURLOPT_URL, $API_SERVER."/bid");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: '.$_SESSION['token']));

			// $output contains the output json
			$output = curl_exec($ch);
			// close curl resource to free up system resources 
			curl_close($ch);
			//var_dump(json_decode($output, true));
			if ($output != $FAIL_MESSAGE) echo "Bid successfully!";
			else echo "Bid fail";
			echo "<br><a href='/'>Return to main page</a>";
		}
	}
?>