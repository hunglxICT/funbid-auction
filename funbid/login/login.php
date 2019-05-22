<?php
	session_start();
?>
<?php
	include('../api.php');
	if (isset($_POST)) {
		if (isset($_POST['username']) && isset($_POST['password'])) {
			// create curl resource
			$ch = curl_init();
			$data = array('loginusername' => $_POST['username'], 'loginpassword' => $_POST['password']);
			// set url 
			curl_setopt($ch, CURLOPT_URL, $API_SERVER."/user-login");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			// $output contains the output json
			$output = curl_exec($ch);
			// close curl resource to free up system resources 
			curl_close($ch);
			//echo $output;
			//var_dump(json_decode($output, true));
			
			if ($output != $FAIL_MESSAGE)
			{
				$_SESSION['token'] = $output;
				$_SESSION['username'] = $_POST['username'];
				echo "You are logged in as ".$_SESSION['username']."!";
			} else echo "Log in fail!";
			echo "<br><a href='/'>Return to main page</a>";
		}
	}
?>	
