
<?php 
	//include "Model/DBConfig.php";

	if(isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}


	switch($action){
		case 'login_admin':{
			require_once('View/admins/login_admin.php');
			break;
		}
	}

 ?>