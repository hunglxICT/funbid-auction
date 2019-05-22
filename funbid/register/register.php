<?php
	include('../api.php');
	if (isset($_POST)) {
		if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
			
			if ($_POST['password'] != $_POST['confirm_password']) {
				echo "Password not equal with confirm password";
				echo "<br><a href='/'>Return to main page</a>";
				die();
			}
			// create curl resource
			$ch = curl_init();
			$fullname = $_POST['first_name'].' '.$_POST['last_name'];
			$data = array('username' => $_POST['username'],
				'password' => $_POST['password'],
				'fullname' => $fullname,
				'role' => 0);
			// set url 
			curl_setopt($ch, CURLOPT_URL, $API_SERVER."/register");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			// $output contains the output json
			$output = curl_exec($ch);
			// close curl resource to free up system resources 
			curl_close($ch);
			//echo $output;
			//var_dump(json_decode($output, true));
			if ($output != $FAIL_MESSAGE) echo "Register successfully!";
			else echo "Register fail";
			echo "<br><a href='/'>Return to main page</a>";
			echo "<br><a href='/login/'>Return to login page</a>";
		}
	}
?>	
