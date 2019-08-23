<?php
if (isset($_SESSION['user_id']) == false) 
{
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: index.php');

}
else 
{
	if (isset($_SESSION['permision']) == true) 
	{
		
		$permision = $_SESSION['permision'];
			// Neu user la ADMIN
		if ($permision == '3') 
		{
			header('Location: management.php');
			echo '<script type="text/javascript">alert("Hello Admin!");</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Sorry! You do not have permission for this funcion !!");</script>';
		}
	}
	break;
}
?>