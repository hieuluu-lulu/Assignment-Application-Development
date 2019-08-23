
<?php 
		session_start(); 

		$_SESSION['user_id'] = null;

		//unset($_SESSION['username']);
		//session_destroy();

		header('Location: index.php');

?>