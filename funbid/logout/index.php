<?php
	session_start();
?>
<?php
	if (isset($_SESSION['token'])) {
		unset($_SESSION['token']);
		unset($_SESSION['username']);
		$_SESSION['status'] = 'Logout successfully!';
		header('Location: /');
	}
	header('Location: /');
?>