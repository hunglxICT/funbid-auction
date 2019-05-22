<?php
	session_start();
?>
<?php
	if (isset($_SESSION['token'])) {
		unset($_SESSION['token']);
		unset($_SESSION['username']);
		echo "Log out successfully!";
	}
	echo "<br><a href='/'>Return to main page</a>";
?>