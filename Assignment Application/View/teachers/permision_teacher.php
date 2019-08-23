
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
		
			
		}
			// Neu user la Staff
		elseif ($permision == '2')
		{ 	
		
		}
			//Neu user la teacher
		elseif ($permision == '1') 
		{
			echo '<script type="text/javascript">alert("Sorry! You do not have permission for this funcion !!");</script>';
			exit();
		}
			//Neu user la student
		elseif ($permision == '0')
		{
			echo '<script type="text/javascript">alert("Sorry! You do not have permission for this funcion !!");</script>';
			exit();
		}
		else {

			header('Location: index.php');
		}
	}
}
?>